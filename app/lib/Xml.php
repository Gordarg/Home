<?php
class Xml{
    static public function Read($url){
        $feeds = simplexml_load_file($url);
        if(!empty($feeds)){
            $output = [];
            foreach ($feeds->channel->item as $item)
                array_push($output,[
                    'title' => $item->title,
                    'link' => $item->link,
                    'description' => $item->description,
                    'postDate' => $item->pubDate,
                    'pubDate' => date('D, d M Y',strtotime($item->pubDate))
                ]);
            return $output;

        }
    }
}