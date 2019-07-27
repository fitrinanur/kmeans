<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Road;

class ProsesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $name = [];
        
        //get inisialisasi and data for data table
        $roads = Road::all();
        foreach($roads as $row){
            $data[]=$row;
            $name[] = $row['name'];
        }

        //get data that needed for iteration
        $data = [];
        foreach($roads as $row){
            $data[]=[
                        $row['speed'],$row['activity'],$row['lane'],
                        $row['first_latitude'],$row['first_longitude'],
                        $row['second_latitude'],$row['second_longitude'],
                        $row['name'],
                    ];
        }
        
        //table header
        $cluster = 3;
        $variable_x = 'Kecepatan';
        $variable_y = 'Aktivitas';
        $variable_z = 'Lajur';
        $variable_1 = 'first_latitude';
        $variable_2 = 'first_longitude';
        $variable_3 = 'second_latitude';
        $variable_4 = 'second_longitude';

        //random
        $rand=[];

         for($i=0;$i<$cluster;$i++){
            $temp=rand(0,(count($data)-1));
            while(in_array($rand, [$temp])){
                $temp=rand(0,(count($data)-1));
            }
            $rand[]=$temp;
            $centroid[0][]=[
                $data[$rand[$i]][0],
                $data[$rand[$i]][1],
                $data[$rand[$i]][2],
            ];
        }
        // dd($centroid[0]);
      
        $hasil_iterasi=[];
        $hasil_cluster=[];

        $iterasi=0;
        while(true){
            $table_iterasi=array();
          
            foreach ($data as $key => $value) {
               
                $table_iterasi[$key]['data']=$value;
               
                foreach ($centroid[$iterasi] as $key_c => $value_c) {
                    // dd($value_c);
                    $table_iterasi[$key]['jarak_ke_centroid'][]=$this->jarakEuclidean($value , $value_c);	
                }
               
                $table_iterasi[$key]['jarak_terdekat']=$this->jarakTerdekat($table_iterasi[$key]['jarak_ke_centroid'],$centroid);
            }
            array_push($hasil_iterasi, $table_iterasi);
            // dd($hasil_iterasi, $table_iterasi, $hasil_cluster);
            $centroid[++$iterasi]=$this->perbaruiCentroid($table_iterasi,$hasil_cluster);

            $lanjutkan=$this->centroidBerubah($centroid,$iterasi);
            $boolval = boolval($lanjutkan) ? 'ya' : 'tidak';
            
            if(!$lanjutkan)
            break;
           
        } 
       
        $config = array();
        $config['center'] = '-7.566029, 110.807620';
        $config['zoom'] = '15';
        $config['cluster'] = TRUE;

        app('map')->initialize($config);

        // set up the marker ready for positioning
        // // once we know the users location
        $maps = [];
        foreach(end($hasil_iterasi) as $val){
            $maps[] = [
                'lat' => [
                    $val['data'][3],
                    $val['data'][5]
                ],
                'long' => [
                    $val['data'][4],
                    $val['data'][6]
                ],
                'name' => $val['data'][7],
                'speed' => $val['data'][1],
                'cluster' => $val['jarak_terdekat']['cluster']
            ];
        }

        $infowindow = "
        <html>
        
        </html>        
        ";

        foreach($maps as $key_m => $map)
        {
            $marker = array();
            $marker['position'] = $map['lat'][0] .','. $map['long'][0];
            $marker['infowindow_content'] = $map['name'];
            $marker['icon'] = 'https://chart.googleapis.com/chart?chst=d_bubble_icon_text_small&chld=glyphish_runner|bb|'.$key_m.'A|FFFFFF|000000';
            app('map')->add_marker($marker);
        }
        foreach($maps as $key_m => $map)
        {
            $marker = array();
            $marker['position'] = $map['lat'][1] .','. $map['long'][1];
            $marker['onclick'] = 'alert("You just clicked me!!")';
            $marker['icon'] = 'https://chart.googleapis.com/chart?chst=d_bubble_icon_text_small&chld=glyphish_map-marker|bb|'.$key_m.'B|FFFFFF|000000';
            app('map')->add_marker($marker);
        }
       
        

        $map = app('map')->create_map();

        

        return view('proses.index'
        , compact(
            'map',
            'cluster', 'variable_x',
            'variable_y',
            'variable_z',
            'variable_1',
            'variable_2',
            'variable_3',
            'variable_4',
            'centroid',
            'data',
            'value',
            'value_c',
            'hasil_iterasi',
            'name'
        )
        );
    }

    function jarakEuclidean($data=array(),$centroid=array()){
            $jarak = sqrt(pow(($data[0]-$centroid[0]),2) + pow(($data[1]-$centroid[1]),2) + pow(($data[1]-$centroid[2]),2));
            return  $jarak;
    }

    function jarakTerdekat($jarak_ke_centroid=array(),$centroid){

        foreach ($jarak_ke_centroid as $key => $value) {
            // dd($value);
            if(!isset($minimum)){
                $minimum=$value;
               
                $cluster=($key+1);
                continue;
            }
            else if($value<$minimum){
                $minimum=$value;
                $cluster=($key+1);
            }
        }
        return array(
            'cluster'=>$cluster,
            'value'=>$minimum,
        );
    }

    function perbaruiCentroid($table_iterasi,$hasil_cluster){
        $hasil_cluster=[];
        //looping untuk mengelompokan x dan y sesuai cluster
        foreach ($table_iterasi as $key => $value) {
            $hasil_cluster[($value['jarak_terdekat']['cluster']-1)][0][]= $value['data'][0];//data x
            $hasil_cluster[($value['jarak_terdekat']['cluster']-1)][1][]= $value['data'][1];//data y
            $hasil_cluster[($value['jarak_terdekat']['cluster']-1)][2][]= $value['data'][2];//data y
        }
        // dd($hasil_cluster);
        $new_centroid=[];
        //looping untuk mencari nilai centroid baru dengan cara mencari rata2 dari masing2 data(0=x dan 1=y dan 2=z) 
        foreach ($hasil_cluster as $key => $value) {
            $new_centroid[$key]= [
                array_sum($value[0])/count($value[0]),
                array_sum($value[1])/count($value[1]),
                array_sum($value[2])/count($value[2]),
            ]; 
        }
        // dd($new_centroid);
        //sorting berdasarkan cluster
        ksort($new_centroid);
        return $new_centroid;
    }

    function centroidBerubah($centroid,$iterasi){
      
        $centroid_lama = $this->flatten_array($centroid[($iterasi-1)]); //flattern array
        // dd($centroid_lama);
        $centroid_baru = $this->flatten_array($centroid[$iterasi]); //flatten array
        // dd($centroid_baru);
        //hitbandingkan centroid yang lama dan baru jika berubah return true, jika tidak berubah/jumlah sama=0 return false
        $jumlah_sama=0;
        for($i=0;$i<count($centroid_lama);$i++){
            if($centroid_lama[$i]===$centroid_baru[$i]){
                $jumlah_sama++;
            }
        }
        // dd($jumlah_sama);
        return $jumlah_sama===count($centroid_lama) ? false : true; 
    }

    function flatten_array($arg) {
        return is_array($arg) ? array_reduce($arg, function ($c, $a) { return array_merge($c, array_flatten($a)); },[]) : [$arg];
    }

    // function pointingHasilCluster($hasil_cluster){
    //     $result=[];
    //     foreach ($hasil_cluster as $key => $value) {
    //         for ($i=0; $i<count($value[0]);$i++) { 
    //             $result[$key][]=[$hasil_cluster[$key][0][$i],$hasil_cluster[$key][1][$i],$hasil_cluster[$key][2][$i]];
    //         }
    //     }
    //     dd($hasil_cluster);
    //     return ksort($result);
    // }
  

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
