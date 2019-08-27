<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Road;
class MapsController extends Controller
{
    
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
                        $row['long'],$row['activity'],$row['lane'],
                        $row['first_latitude'],$row['first_longitude'],
                        $row['second_latitude'],$row['second_longitude'],
                        $row['middle_latitude_1'],$row['middle_longitude_1'],
                        $row['middle_latitude_2'],$row['middle_longitude_2'],
                        $row['name'], $row['type'],
                    ];
        }
//        dd($data);
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

        //  for($i=0;$i<$cluster;$i++){
        //     $temp=rand(0,(count($data)-1));
        //     while(in_array($rand, [$temp])){
        //         $temp=rand(0,(count($data)-1));
        //     }
        //     $rand[]=$temp;
        //     $centroid[0][]=[
        //         $data[$rand[$i]][0],
        //         $data[$rand[$i]][1],
        //         $data[$rand[$i]][2],
        //     ];
        // }
        for($i=0;$i<$cluster;$i++){
            $temp=[38,11,1];
            while(in_array($rand, [$temp])){
                $temp=rand(0,(count($data)-1));
            }
            // $rand[]=$temp;
            $centroid[0][]=[
                $data[$temp[$i]][0],
                $data[$temp[$i]][1],
                $data[$temp[$i]][2],
            ];
        }
        //  dd($centroid[0]);
      
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
        
        app('map')->initialize($config);

        // set up the marker ready for positioning
        // // once we know the users location
        $maps = [];
        //dd(end($hasil_iterasi));
        foreach(end($hasil_iterasi) as $val){
            $maps[] = [
                'lat' => [
                    $val['data'][3],
                    $val['data'][5],
                    
                ],
                'long' => [
                    $val['data'][4],
                    $val['data'][6],
                ],
                'middle_lat'=>[
                      $val['data'][7],
                    $val['data'][9],
                ],
                'middle_long'=>[
                    $val['data'][8],
                    $val['data'][10],
                ],
                'name' => $val['data'][11],
                'panjang' => $val['data'][0],
                'lane' => $val['data'][2],
                'type' => $val['data'][12],
                'cluster' => $val['jarak_terdekat']['cluster']
            ];
        }





        // dd($maps);
        foreach($maps as $key_m => $map)
        {
            $polyline = array();
            // elseif
            if($map['middle_lat'][0] != null && $map['middle_lat'][1] === null){
                $polyline['points'] = array($map['lat'][0] .','. $map['long'][0],
                $map['middle_lat'][0] .','. $map['middle_long'][0],
                $map['lat'][1] .','. $map['long'][1]
                ); 
            }elseif($map['middle_lat'][1] != null && $map['middle_lat'][0] === null ){
                    $polyline['points'] = array($map['lat'][0] .','. $map['long'][0],
                    $map['middle_lat'][1] .','. $map['middle_long'][1],
                    $map['lat'][1] .','. $map['long'][1]
                    ); 
            }elseif($map['middle_lat'][0] === null || $map['middle_lat'][1] === null ){
                    $polyline['points'] = array($map['lat'][0] .','. $map['long'][0],
                    $map['lat'][1] .','. $map['long'][1]
                    ); 
            }else{
                $polyline['points'] = array($map['lat'][0] .','. $map['long'][0],
                $map['middle_lat'][0] .','. $map['middle_long'][0],
                $map['middle_lat'][1] .','. $map['middle_long'][1],
                $map['lat'][1] .','. $map['long'][1]
                );
            }
            app('map')->add_polyline($polyline);
//            $map = app('map')->create_map();
            if($map['cluster'] == 1){
                $kategori ="Lancar";
            }elseif($map['cluster'] == 2)
            {
                $kategori ="Sedang";
            }else{
                $kategori ="Macet"; 
            }
            $infowindow ="<html><div class='card'><div class='card-header'><h4>Informasi Jalan</h4></div><div class='card-body'><p>Nama Jalan : ".$map['name']."</p><p>Panjang Jalan : ".$map['panjang']."</p><p>Lajur Jalan : ".$map['lane']."</p><p>Tipe : ".$map['type']."<p>Kategori : ".$kategori."</div></div></html>";

            $marker = array();
            $marker['position'] = $map['lat'][0] .','. $map['long'][0];
            $marker['infowindow_content'] = $infowindow;
            if($map['cluster']==1){
                $marker['icon'] = 'https://chart.googleapis.com/chart?chst=d_bubble_icon_text_small&chld=glyphish_map-marker|bb|'.($key_m+1).'A|ADDE63|000000';
            }elseif($map['cluster']==2){
                $marker['icon'] = 'https://chart.googleapis.com/chart?chst=d_bubble_icon_text_small&chld=glyphish_map-marker|bb|'.($key_m+1).'A|FFFF00|000000';
            }else{
                $marker['icon'] = 'https://chart.googleapis.com/chart?chst=d_bubble_icon_text_small&chld=glyphish_map-marker|bb|'.($key_m+1).'A|FF0000|000000';
            }
            app('map')->add_marker($marker);
        }
        // foreach($maps as $key_m => $map)
        // {
        //    $marker = array();
        //     $marker['position'] = $map['lat'][1] .','. $map['long'][1];
        //     $marker['onclick'] = 'alert("You just clicked me!!")';
        //     if($map['cluster']==1){
        //        $marker['icon'] = 'https://chart.googleapis.com/chart?chst=d_bubble_icon_text_small&chld=glyphish_todo|bb|'.($key_m+1).'B|FF0000|000000';
        //     }elseif($map['cluster']==2){
        //        $marker['icon'] = 'https://chart.googleapis.com/chart?chst=d_bubble_icon_text_small&chld=glyphish_todo|bb|'.($key_m+1).'B|ADDE63|000000';
        //     }else{
        //        $marker['icon'] = 'https://chart.googleapis.com/chart?chst=d_bubble_icon_text_small&chld=glyphish_todo|bb|'.($key_m+1).'B|FFFF00|000000';
        //     }
        //     app('map')->add_marker($marker);
        // }

        $map = app('map')->create_map();

        

        return view('maps.index'
        , compact('map'));
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
}
