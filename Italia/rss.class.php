<?php
/**
* Class name: RSS
*/

class RSS {
   //public
   var $rss_ver = "2.0";
   var $channel_title = '';
   var $channel_link = '';
   var $channel_description = '';
   var $language = 'en-us';
   var $copyright = '';
   var $webMaster = '';
   var $pubDate = '';
   var $lastBuildDate = '';
   var $generator = 'RedFox RSS Generator';
   var $content = '';
   var $category = '';
   var $items = array();
   /**************************************************************************/
   // 函数名: RSS
   // 功能: 构造函数
   // 参数: $title
   // $link
   // $description
   /**************************************************************************/
   function RSS($title, $link, $description) {
       $this->channel_title = $title;
       $this->channel_link = $link;
       $this->channel_description = $description;
       $this->pubDate = Date(DATE_RFC822,time());
       $this->lastBuildDate = Date(DATE_RFC822,time());
   }
   /**************************************************************************/
   // 函数名: AddItem
   // 功能: 添加一个节点
   // 参数: $title
   // $link
   // $description $pubDate
   /**************************************************************************/
   function AddItem($title, $link,$category ,$description ,$pubDate) {
       $this->items[] = array('title' => $title ,
                        'link' => $link,
                        'description' => $description,
						'category' => $category,
                        'pubDate' => $pubDate);
   }
   /**************************************************************************/
   // 函数名: BuildRSS
   // 功能: 生成rss xml文件内容
   /**************************************************************************/
   function BuildRSS() {
       $s = "<rss xmlns:content=\"http://purl.org/rss/1.0/modules/content/\" xmlns:wfw=\"http://wellformedweb.org/CommentAPI/\" xmlns:dc=\"http://purl.org/dc/elements/1.1/\" xmlns:atom=\"http://www.w3.org/2005/Atom\" xmlns:sy=\"http://purl.org/rss/1.0/modules/syndication/\" xmlns:slash=\"http://purl.org/rss/1.0/modules/slash/\" version=\"2.0\">";
       // start channel
       $s .= "<channel>\n";
       $s .= "<title>{$this->channel_title}</title>\n";
       $s .= "<link>{$this->channel_link}</link>\n";
       $s .= "<description>{$this->channel_description}</description>\n";
       $s .= "<language>{$this->language}</language>\n";
       if (!empty($this->copyright)) {
          $s .= "<copyright><![CDATA[{$this->copyright}]]></copyright>\n";
       }
       if (!empty($this->webMaster)) {
          $s .= "<webMaster><![CDATA[{$this->webMaster}]]></webMaster>\n";
       }
       if (!empty($this->pubDate)) {
          $s .= "<pubDate>{$this->pubDate}</pubDate>\n";
       }
       if (!empty($this->lastBuildDate)) {
          $s .= "<lastBuildDate>{$this->lastBuildDate}</lastBuildDate>\n";
       }
       if (!empty($this->generator)) {
          $s .= "<generator>{$this->generator}</generator>\n";
       }
       // start items
       for ($i=0;$i<count($this->items);$i++) {
           $s .= "<item>\n";
           $s .= "<title>{$this->items[$i]['title']}</title>\n";
           $s .= "<link>{$this->items[$i]['link']}</link>\n";
		   $s .= "<category>{$this->items[$i]['category']}</category>\n";
           $s .= "<description><![CDATA[{$this->items[$i]['description']}]]></description>\n";
           $s .= "<pubDate>{$this->items[$i]['pubDate']}</pubDate>\n";          
           $s .= "</item>\n";
       }
      // close channel
      $s .= "</channel>\n</rss>";
      $this->content = $s;
   }
   /**************************************************************************/
   // 函数名: Show
   // 功能: 将产生的rss内容直接打印输出
   /**************************************************************************/
   function Show() {
       if (empty($this->content)) $this->BuildRSS();
       echo($this->content);
   }
   /**************************************************************************/
   // 函数名: SaveToFile
   // 功能: 将产生的rss内容保存到文件
   // 参数: $fname 要保存的文件名
   /**************************************************************************/
   function SaveToFile($fname) {
       $handle = fopen($fname, 'wb');
       if ($handle === false) return false;
       fwrite($handle, $this->content);
       fclose($handle);
   }
   
   function getFile($fname) {
       $handle = fopen($fname, 'r');
       if ($handle === false) return false;
    while(!feof($handle)){
            echo fgets($handle);
    }
       fclose($handle);
   }
   
}
?>