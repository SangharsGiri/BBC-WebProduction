<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Crud_model extends CI_Model
{
    public function get_all($table)
    {
        $result = $this->db->get($table)->result_array();
        return $result;
    }


    public function record_count() {
        return $this->db->count_all("igc_package");
    }


    public function get_all_products($start_point = 0, $per_page = 0)
    {

        $query = $this->db->query("select * FROM igc_package WHERE status = '1' AND delete_status = '0'  order by created desc limit
		{$start_point},{$per_page}");
        $result = $query->result_array();
        return $result;
    }
    public function get_all_news($start_point = 0, $per_page = 0)
    {

        $query = $this->db->query("select * FROM igc_package WHERE status = '1' AND delete_status = '0'  order by created desc limit
        {$start_point},{$per_page}");
        $result = $query->result_array();
        return $result;
    }

    public function get_recent_new($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
        $this->db->order_by('igc_content.content_id','DESC')->limit(9,3);
        $result = $this->db->get()->result_array();
        return $result;
    }

    public function get_prodetail()
    {
        // Use the Active Record class for safer queries.
        $this->db->select('*');
        $this->db->from('igc_package');
        $this->db->where('delete_status', '0');
        $this->db->order_by('package_id','Desc');
//        $this->db->where('show_front', '0');
//        $this->db->like('property_uae',$search_term);
//        $this->db->like('property_type',$search_terms);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
    }


    public function get_not_deleted($table)
    {
        $this->db->where('delete_status', "0");
        $result = $this->db->get($table)->result_array();
        return $result;
    }
    function get_last_ten_entries()
    {
        return $this->db->get('igc_job');  //Perform query (you'll need to update to select what you actually want from you database)
    }
    //get popup data
    public function get_popup(){

        $this->db->where('publish_status', '1');
        $this->db->where('delete_status', '0');
        $result = $this->db->get('igc_popup')->row_array();
        return $result;
    }

    public function get_active_not_delete_all($field_name,$table)
    {
        $this->db->where('publish_status','1');
        $this->db->where('delete_status','0');
        $this->db->order_by($field_name,'Desc');
        $result = $this->db->get($table)->result_array();
        return $result;
    }

    //function for the autocomplete
     public function Getdestination($keyword) {        
        
        $this->db->like("destination", $keyword);
        return $this->db->get('igc_destination')->result_array();
    }

    //function for the autocomplete trek
     public function Getregion($keyword) {        
        
        $this->db->like("region_name", $keyword);
        return $this->db->get('igc_regions')->result_array();
    }





    //function to  get  detail

    public function get_detail($id, $field_name, $table)
    {
        $this->db->where($field_name, $id);
        $result = $this->db->get($table)->row_array();
        return $result;
    }

    //function to  get  detail

    public function get_active_not_deleted_detail($id, $field_name, $table)
    {
        $this->db->where('publish_status', '1');
        $this->db->where('delete_status', '0');
        $this->db->where($field_name, $id);
        $result = $this->db->get($table)->row_array();
        return $result;
    }

    public function get_active_not_deleted_author($id, $field_name, $table)
    {
        $this->db->where('delete_status', '0');
        $this->db->where('status', '1');
        $this->db->where($field_name, $id);
        $result = $this->db->get($table)->row_array();
        return $result;
    }



//get detail for the status 
//    public function get_active_not_deleted_details($id, $field_name, $table)
//    {
//        $this->db->where('status', '1');
//        $this->db->where('delete_status', '0');
//        $this->db->where($field_name, $id);
//        $result = $this->db->get($table)->row_array();
//        return $result;
//    }




    public function get_active_not_delete_records($id, $field_name, $table)
    {
        $this->db->where('publish_status', '1');
        $this->db->where('delete_status', '0');
        $this->db->where($field_name, $id);
        $result = $this->db->get($table)->result_array();
        return $result;
    }


    public function get_not_deleted_detail($id, $field_name, $table)
    {
        $this->db->where($field_name, $id);
        $this->db->where('delete_status', "0");
        $result = $this->db->get($table)->row_array();
        return $result;
    }

    public function get_contact($table)
    {
       $this->db->where('id', '1');
        $result = $this->db->get($table)->row_array();
        return $result;
    }
    //function to count

    public function count_active_not_deleted_records($id, $field_name, $table)
    {
        $this->db->where($field_name, $id);
        $this->db->where('publish_status', "1");
        $this->db->where('delete_status', "0");
        $result = $this->db->get($table)->num_rows();
        return $result;
    }


    public function get_not_deleted_row($id, $field_name, $table)
    {
        $this->db->where($field_name, $id);
        $this->db->where('delete_status', "0");
        $result = $this->db->get($table)->row_array();
        return $result;
    }


    public function not_deleted_total($table)
    {
        $this->db->where('delete_status', "0");
        $result = $this->db->get($table)->num_rows();
        return $result;
    }

//Search property
    public function get_results($search_term='default' )
    {
        // Use the Active Record class for safer queries.
        $this->db->select('*');
        $this->db->from('igc_content');
        $this->db->where('delete_status', "0");
        $this->db->like('content_page_title',$search_term);


        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
    }

    public function get_results_english($search_term='default')
    {
        // Use the Active Record class for safer queries.
        $this->db->select('*');
        $this->db->from('igc_content');
        $this->db->where('show_on_menu','N');
        $this->db->like('content_page_title',$search_term);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
    }



public function get_news_by_category_id($cat_id=''){
    $this->db->select('*');
        $this->db->from('igc_content');
        $this->db->where('category_id',$cat_id);
        $query = $this->db->get();
        // Return the results.
        return $query->result_array();

}


    public function get_article_list($id, $start_point = 0, $per_page = 0){
        /*$detail = $this->crud->get_active_not_deleted_detail($slug, 'category_url', 'igc_package_category');
        $cat_id = $detail['category_id']*/

//        $query1 = $this->db->query("SELECT * FROM `igc_category_packages` WHERE `category_id` = $id");
//        $result1 = $query1->result_array();
//        $string="";
//        foreach ($result1  as $row) {
//            $string.=$row['package_id'].",";
//        }
//        $string = rtrim($string,",");

        $query="
                SELECT * FROM `igc_content` a
                JOIN `multi_cat` b ON a.content_id=b.content_id
                WHERE b.`category_id` = $id AND a.`publish_status` = '1' AND a.`delete_status` ='0' ORDER by a.content_id DESC limit
                    {$start_point},{$per_page}
                ";
        $query2 = $this->db->query($query);
        $result2 = $query2->result_array();

        return $result2;


    }

    public function get_where($table,$array){
        if(count($array) > 0){
            foreach($array as $key => $value){
                $this->db->where("$key","$value");
            }
        }
        $result = $this->db->get($table)->result_array();
        return $result;
    }

    public function get_article_author($id, $start_point = 0, $per_page = 0){
        /*$detail = $this->crud->get_active_not_deleted_detail($slug, 'category_url', 'igc_package_category');
        $cat_id = $detail['category_id']*/

//        $query1 = $this->db->query("SELECT * FROM `igc_category_packages` WHERE `category_id` = $id");
//        $result1 = $query1->result_array();
//        $string="";
//        foreach ($result1  as $row) {
//            $string.=$row['package_id'].",";
//        }
//        $string = rtrim($string,",");

        $query2 = $this->db->query("SELECT * FROM `igc_content` WHERE `user_id` = $id AND `publish_status` ='1' AND `delete_status` ='0' ORDER by content_id DESC limit
		{$start_point},{$per_page}");
        $result2 = $query2->result_array();

        return $result2;



    }




    
    //Search Jobs
public function get_job_result($search_term='default')
    {
        // Use the Active Record class for safer queries.
        $this->db->select('*');
        $this->db->from('igc_content');
        $this->db->like('content_title',$search_term);

        // Execute the query.
        $query = $this->db->get();

        // Return the results.
        return $query->result_array();
    }

//function to insert

    public function insert($insert, $table)
    {
        $result = $this->db->insert($table, $insert);
        if ($result) {
            return $result;
        } else {
            return false;

        }
    }

    //function to insert and return id

    public function insert_return_id($insert, $table)
    {
        $this->db->insert($table, $insert);
        $result = $this->db->insert_id();
        if ($result) {
            return $result;
        } else {
            return false;

        }
    }


    //function to update

    public function update($id, $field_name, $update, $table)
    {
        $this->db->where($field_name, $id);
        $result = $this->db->update($table, $update);
        if ($result) {
            return $result;
        } else {
            return false;

        }
    }


    public function soft_delete($id, $field_name, $table)
    {
        $update['updated'] = date('Y-m-d:H:i:s');
        $update['delete_status'] = "1";
        $this->db->where($field_name, $id);
        $result = $this->db->update($table, $update);
        if ($result) {
            return $result;
        } else {
            return false;
        }

    }

    public function delete($id, $field_name, $table)
    {

        $this->db->where($field_name, $id);
        $result = $this->db->delete($table);
        if ($result) {
            return $result;
        } else {
            return false;
        }

    }


    public function get_detail_rows($id, $field_name, $table)
    {
        $this->db->where($field_name, $id);
        $result = $this->db->get($table)->result_array();
        return $result;
    }


    public function get_detail_records($id, $field_name, $table)
    {
        $this->db->where($field_name, $id);
        $this->db->where('delete_status', '0');
        $result = $this->db->get($table)->result_array();
        return $result;
    }


    //get active and not deleted

    public function get_active_not_deleted($id, $field_name, $table)
    {
        $this->db->where($field_name, $id);
        $this->db->where('publish_status', '1');
        $this->db->where('delete_status', '0');
        $result = $this->db->get($table)->result_array();
        return $result;
    }

    //function mail server settings

    public function get_mail_info()
    {
        $this->db->where('delete_status', '0');
        $this->db->where('active_status', '1');
        $result = $this->db->get('igc_mail_server_setting')->row_array();
        return $result;


    }


//function to get forex rate

public function get_forex($date, $start_point=0, $per_page=0)
{
   $query = $this->db->query("select * from igc_forex_detail where publish_status = '1' and forex_id in (select forex_id from igc_forex_index where forex_date='$date' and delete_status='0') limit {$start_point},{$per_page}");
   $result =  $query->result_array();
   return $result;
}


    public function get_topbar_menu($table)
    {
        $this->db->where('publish_status', "1")->where('group_id','1')->where('parent_id','0');
        $this->db->where('show_on_menu','T');
        $this->db->where('delete_status','0');
        $this->db->order_by('position','ASC');
        $result = $this->db->get($table)->result_array();
        return $result;
    }






//function get parent menu

public function get_parent_footer_menu()
{
    $this->db->select('content_id');
    $this->db->select('content_page_title');
    $this->db->where('delete_status','0')->where('publish_status','1')->where('group_id','1')->where('parent_id','0')->where('show_on_menu','Y');
    $this->db->order_by('position','ASC');
    $result =  $this->db->get('igc_content')->result_array();
    return $result;

}



    public function get_active_records($table)
    {
        $this->db->where('publish_status', "1");
        $result = $this->db->get($table)->result_array();
        return $result;
    }


    public function get_active_content_records($table)
    {
        $this->db->where('publish_status', "1");
        $this->db->where('delete_status', "0");
        $this->db->where('show_on_menu', "N");
        $this->db->order_by('content_id','DESC')->limit(20);
        $result = $this->db->get($table)->result_array();
        return $result;
    }


    public function get_active_featured_records($table)
    {
        $this->db->where('publish_status', "1");
        $this->db->where('delete_status', "0");
        $this->db->where('show_on_menu', "N");
        $this->db->where('featured_content', "1");
        $this->db->order_by('content_id','DESC')->limit(12);
        $result = $this->db->get($table)->result_array();
        return $result;
    }

    public function get_active_themes_records($table)
    {
        $this->db->where('publish_status', "1");
        $this->db->where('delete_status', "0");
        $this->db->where('show_on_menu', "N");
        $this->db->where('content_type', "Themes");
        $this->db->order_by('content_id','DESC')->limit(3);
        $result = $this->db->get($table)->result_array();
        return $result;
    }


    public function get_active_special_records($table)
    {
        $this->db->where('publish_status', "1");
        $this->db->where('delete_status', "0");
        $this->db->where('show_on_menu', "N");
        $this->db->where('special_content', "1");
        $this->db->order_by('content_id','DESC')->limit(1);
        $result = $this->db->get($table)->result_array();
        return $result;
    }




    public function get_active_slide_records($table)
    {
        $this->db->where('publish_status', "1");
        $this->db->where('delete_status', "0");
        $this->db->where('show_on_menu', "N");
        $this->db->where('slider_content', "1");
        $this->db->order_by('content_id','DESC')->limit(10);
        $result = $this->db->get($table)->result_array();
        return $result;
    }


    public function get_active_home_categories($table)
    {
        $this->db->where('publish_status', "1");
        $this->db->where('show_front', "1");
        $result = $this->db->get($table)->result_array();
        return $result;
    }





    public function get_home_work($table)
    {
        $this->db->where('publish_status', "1")->limit(15);

        $result = $this->db->get($table)->result_array();
        return $result;
    }




    public function get_active_services($table)
    {
        $this->db->where('publish_status', "1")->limit(4);

        $result = $this->db->get($table)->result_array();
        return $result;
    }

    public function get_active_review($table)
    {
        $this->db->where('publish_status', "1");
        $this->db->where('delete_status', "0");
        $result = $this->db->get($table)->result_array();
        return $result;
    }
    public function get_parent_top_sub_menu($parent_id)
    {
        $this->db->select('content_id');
        $this->db->select('content_page_title');
        $this->db->select('content_url');
        $this->db->where('delete_status','0')->where('publish_status','1')->where('group_id','1')->where('parent_id',$parent_id)->where('show_on_menu','T');
        $this->db->order_by('position','ASC');
        $result =  $this->db->get('igc_content')->result_array();
        return $result;

    }



    public function get_parent_category_menu()
    {
        $this->db->select('category_id');
        $this->db->select('category_url');
        $this->db->select('category_name');
        $this->db->where('delete_status','0')->where('publish_status','1')->where('group_id','1')->where('parent_id','0')->where('show_mobile','Y');
        $this->db->order_by('position','ASC');
        $result =  $this->db->get('igc_package_category')->result_array();
        return $result;

    }

    public function get_parent_category_sub_menu($parent_id)
    {
        $this->db->select('category_id');
        $this->db->select('category_name');
        $this->db->select('category_url');
        $this->db->where('delete_status','0')->where('publish_status','1')->where('group_id','1')->where('parent_id',$parent_id)->where('category_code','HM');
        $this->db->order_by('position','ASC');
        $result =  $this->db->get('igc_package_category')->result_array();
        return $result;

    }



    public function get_parent_header_menu($code)
    {
        $this->db->select('category_id');
        $this->db->select('category_name');
        $this->db->select('category_url');
        $this->db->where('delete_status','0')->where('publish_status','1')->where('category_code', $code)->where('group_id','1')->where('parent_id','0');
        $this->db->order_by('position','ASC');
        $result =  $this->db->get(' igc_package_category')->result_array();
        return $result;

    }


    public function get_parent_footer_subss_menu($parent_id)
    {
        $this->db->select('content_id');
        $this->db->select('content_page_title');
        $this->db->select('content_url');
        $this->db->where('delete_status','0')->where('publish_status','1')->where('group_id','1')->where('parent_id',$parent_id)->where('show_on_menu','Y');
        $this->db->order_by('position','ASC');
        $result =  $this->db->get('igc_content')->result_array();
        return $result;

    }

    public function get_parent_header_sub_menu($parent_id)
    {
        $this->db->select('category_id');
        $this->db->select('category_name');
        $this->db->select('category_url');
        $this->db->where('delete_status','0')->where('publish_status','1')->where('group_id','1')->where('parent_id',$parent_id);
//        $this->db->where('delete_status','0')->where('publish_status','1')->where('category_code', $code)->where('group_id','1')->where('parent_id','0');
        $this->db->order_by('position','ASC');
        $result =  $this->db->get('igc_package_category')->result_array();
        return $result;

    }

    /** IH */

    public function get_accommodation()
    {
        $this->db->where('status','1');
        $result =  $this->db->get('igc_accommodation_setting')->result_array();
        return $result;

    }


    //function get atos setting

    public function get_atos_setting()
    {
        $this->db->where('delete_status','0');
        $this->db->where('active_status','1');
        $result =  $this->db->get('igc_atos_setting')->row_array();
        return $result;
    }


    //function get paypal setting

    public function get_paypal_setting()
    {
        $this->db->where('delete_status','0');
        $this->db->where('publish_status','1');
        $result =  $this->db->get('igc_paypal_setting')->row_array();
        return $result;
    }
    public function get_active_cat_news($table)
    {
        $this->db->where('publish_status', "1");
        $this->db->where('delete_status', "0");
        $this->db->where('admin_per', "1");
        $this->db->order_by('content_id','DESC')->limit(1);
        $result = $this->db->get($table)->result_array();
        return $result;
    }
    public function get_active_cat_news_offset1($table)
    {
        $this->db->where('publish_status', "1");
        $this->db->where('delete_status', "0");
        $this->db->where('admin_per', "1");
        $this->db->order_by('content_id','DESC')->limit(1,1);
        $result = $this->db->get($table)->result_array();
        return $result;
    }
    public function get_active_cat_news_offset2($table)
    {
        $this->db->where('publish_status', "1");
        $this->db->where('delete_status', "0");
        $this->db->where('admin_per', "1");
        $this->db->order_by('content_id','DESC')->limit(1,2);
        $result = $this->db->get($table)->result_array();
        return $result;
    }
    public function get_active_cat_news_offset3($table)
    {
        $this->db->where('publish_status', "1");
        $this->db->where('delete_status', "0");
        $this->db->where('admin_per', "1");
        $this->db->order_by('content_id','DESC')->limit(1,3);
        $result = $this->db->get($table)->result_array();
        return $result;
    }
     public function get_active_cat_news_offset4($table)
   {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"1");
    $this->db->order_by('igc_content.created','DESC')->limit(1);
    $result = $this->db->get()->result_array();
    return $result;
    }
    public function get_active_cat_news_offset5($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"1");
        $this->db->order_by('igc_content.content_id','DESC')->limit(4,1);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_cat_news_shortcode($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"3");
        $this->db->order_by('igc_content.content_id','DESC')->limit(1);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_cat_news_shortcode1($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"3");
        $this->db->order_by('igc_content.content_id','DESC')->limit(4,1);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_cat_news_shortcodeoffset1($table)
    {
       $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"3");
        $this->db->order_by('igc_content.content_id','DESC')->limit(4,1);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_latest_blog_articles($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"19");
        $this->db->order_by('igc_content.content_id','DESC')->limit(2);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_latest_blog_articles1($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"19");
        $this->db->order_by('igc_content.content_id','DESC')->limit(2,2);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_latest_blog_articles2($table)
    {
         $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"19");
        $this->db->order_by('igc_content.content_id','DESC')->limit(2,4);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_articles_in_the_last_hour($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"22");
        $this->db->order_by('igc_content.content_id','DESC')->limit(6);
        $result = $this->db->get()->result_array();
        return $result;

    }
    public function get_active_latest_blog($table)
    {
       $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"8");
        $this->db->order_by('igc_content.content_id','DESC')->limit(3);
        $result = $this->db->get()->result_array();
        return $result;


        // $sql="SELECT * FROM (`igc_content`) WHERE `publish_status` = '1' AND `delete_status` = '0' AND `category_id` = '8' ORDER BY `content_id` DESC LIMIT 3";
        // $query=$this->db->query($sql);
        //  echo $this->db->last_query();
        // return $query->result_array();
    }
     public function get_active_gadget_world($table)
    {
         $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"4");
        $this->db->order_by('igc_content.content_id','DESC');
        $result = $this->db->get()->row_array();
        return $result;
    }
    public function get_active_world_wide($table)
    {
        
        $sql = "SELECT * FROM igc_content INNER JOIN multi_cat ON multi_cat.content_id=igc_content.content_id where
publish_status = 1 AND (multi_cat.category_id = '24' or multi_cat.category_id = '25' or multi_cat.category_id = '26' or multi_cat.category_id = '27' or multi_cat.category_id = '28' or multi_cat.category_id = '29' or multi_cat.category_id = '30') ORDER BY created DESC limit 1";
       $query = $this->db->query($sql);
       return $query->row_array();
    }

    public function get_active_world_wide2($table)
    {
        $sql = "SELECT * FROM igc_content INNER JOIN multi_cat ON multi_cat.content_id=igc_content.content_id where
publish_status = 1 AND (multi_cat.category_id = '24' or multi_cat.category_id = '25' or multi_cat.category_id = '26' or multi_cat.category_id = '27' or multi_cat.category_id = '28' or multi_cat.category_id = '29' or multi_cat.category_id = '30') ORDER BY created DESC limit 1,4";
       $query = $this->db->query($sql);
       return $query->result_array();
        
    }
    // public function get_active_world_wide1($table)
    // {
    //     $query = $this->db->query("select * FROM igc_content WHERE publish_status = '1' AND delete_status = '0' AND (category_id = '24' or category_id = '25' or category_id = '26' or category_id = '27' or category_id = '28')  order by created desc");
    //     $this->db->order_by('content_id','DESC')->limit(2);
    //     $result = $this->db->get($table)->result_array();
    //     return $result;
    // }
    public function get_active_gadget_world1($table)
    {
       $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"4");
        $this->db->order_by('igc_content.content_id','DESC')->limit(4,1);
        $result = $this->db->get()->result_array();
        return $result;
    }
        public function get_active_gadget_world_small($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"4");
        $this->db->order_by('igc_content.content_id','DESC')->limit(2,2);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_gadget_world2($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"4");
        $this->db->order_by('igc_content.content_id','DESC')->limit(1,1);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_gadget_world2_small($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"4");
        $this->db->order_by('igc_content.content_id','DESC')->limit(2,4);
        $result = $this->db->get()->result_array();
        return $result;
    }
    
    public function get_active_author_name($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"23");
        $this->db->order_by('igc_content.content_id','DESC')->limit(1);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_latest_articles($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"20");
        $this->db->order_by('igc_content.content_id','DESC')->limit(4);
        $result = $this->db->get()->result_array();
        return $result;

    }
    public function get_active_footer_category($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"22");
        $this->db->order_by('igc_content.content_id','DESC')->limit(4);
        $result = $this->db->get()->result_array();
        return $result;

    }
    public function get_active_popular_article($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"11");
        $this->db->order_by('igc_content.content_id','DESC')->limit(4);
        $result = $this->db->get()->result_array();
        return $result;

    }
    public function get_active_breaking_news($table)
    {
        $this->db->where('breaking', "1");
        $this->db->where('admin_per', "1");
        $this->db->order_by('content_id','DESC')->limit(1);
        $result = $this->db->get($table)->result_array();
        return $result;

    }
    public function get_active_latest_popular_articles($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
        $this->db->order_by('igc_content.content_id','DESC')->limit(5);
        $result = $this->db->get()->result_array();
        return $result;

    }
    public function get_active_ads($table)
    {
         $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"17");
        $this->db->order_by('igc_content.content_id','DESC')->limit(3);
        $result = $this->db->get()->row_array();
        return $result;

    }
     public function get_active_national_news($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"24");
        $this->db->order_by('igc_content.content_id','DESC')->limit(1);
        $result = $this->db->get()->row_array();
        return $result;

    }
    public function get_active_national_news2($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"24");
        $this->db->order_by('igc_content.content_id','DESC')->limit(4,1);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_international_news($table)
    {
       $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"25");
        $this->db->order_by('igc_content.content_id','DESC')->limit(1);
        $result = $this->db->get()->row_array();
        return $result;
    }
    //  public function get_active_international_news1($table)
    // {
    //     $this->db->where('publish_status', "1");
    //     $this->db->where('delete_status', "0");
    //     $this->db->where('category_id', "25");
    //     $this->db->order_by('content_id','DESC')->limit(2);
    //     $result = $this->db->get($table)->result_array();
    //     return $result;
    // }
    public function get_active_international_news2($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"25");
        $this->db->order_by('igc_content.content_id','DESC')->limit(4,1);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_province3_news($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"26");
        $this->db->order_by('igc_content.content_id','DESC')->limit(1);
        $result = $this->db->get()->row_array();
        return $result;
    }
    //  public function get_active_province3_news1($table)
    // {
    //     $this->db->where('publish_status', "1");
    //     $this->db->where('delete_status', "0");
    //     $this->db->where('category_id', "26");
    //     $this->db->order_by('content_id','DESC')->limit(2);
    //     $result = $this->db->get($table)->result_array();
    //     return $result;
    // }
    public function get_active_province3_news2($table)
    {
         $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"26");
        $this->db->order_by('igc_content.content_id','DESC')->limit(4,1);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_province4_news($table)
    {
         $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"27");
        $this->db->order_by('igc_content.content_id','DESC')->limit(1);
        $result = $this->db->get()->row_array();
        return $result;
    }
    //  public function get_active_province4_news1($table)
    // {
    //     $this->db->where('publish_status', "1");
    //     $this->db->where('delete_status', "0");
    //     $this->db->where('category_id', "27");
    //     $this->db->order_by('content_id','DESC')->limit(2);
    //     $result = $this->db->get($table)->result_array();
    //     return $result;
    // }
    public function get_active_province4_news2($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"27");
        $this->db->order_by('igc_content.content_id','DESC')->limit(4,1);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_province5_news($table)
    {
         $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"28");
        $this->db->order_by('igc_content.content_id','DESC')->limit(1);
        $result = $this->db->get()->row_array();
        return $result;
    }
    //  public function get_active_province5_news1($table)
    // {
    //     $this->db->where('publish_status', "1");
    //     $this->db->where('delete_status', "0");
    //     $this->db->where('category_id', "28");
    //     $this->db->order_by('content_id','DESC')->limit(2);
    //     $result = $this->db->get($table)->result_array();
    //     return $result;
    // }
    public function get_active_province5_news2($table)
    {
         $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"28");
        $this->db->order_by('igc_content.content_id','DESC')->limit(4,1);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_province6_news($table)
    {
       $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"29");
        $this->db->order_by('igc_content.content_id','DESC')->limit(1);
        $result = $this->db->get()->row_array();
        return $result;
    }
    //  public function get_active_province6_news1($table)
    // {
    //     $this->db->where('publish_status', "1");
    //     $this->db->where('delete_status', "0");
    //     $this->db->where('category_id', "29");
    //     $this->db->order_by('content_id','DESC')->limit(2);
    //     $result = $this->db->get($table)->result_array();
    //     return $result;
    // }
    public function get_active_province6_news2($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"29");
        $this->db->order_by('igc_content.content_id','DESC')->limit(4,1);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_active_province7_news($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"30");
        $this->db->order_by('igc_content.content_id','DESC')->limit(1);
        $result = $this->db->get()->row_array();
        return $result;
    }
    //  public function get_active_province7_news1($table)
    // {
    //     $this->db->where('publish_status', "1");
    //     $this->db->where('delete_status', "0");
    //     $this->db->where('category_id', "30");
    //     $this->db->order_by('content_id','DESC')->limit(2);
    //     $result = $this->db->get($table)->result_array();
    //     return $result;
    // }
    public function get_active_province7_news2($table)
    {
        $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    
    $this->db->where('multi_cat.category_id',"29");
        $this->db->order_by('igc_content.content_id','DESC')->limit(4,1);
        $result = $this->db->get()->result_array();
        return $result;
    }
    public function get_recent($single_id, $table){

    $this->db->select('*');
    $this->db->from('igc_content');
    $this->db->join('multi_cat', 'multi_cat.content_id = igc_content.content_id');
    $this->db->where('igc_content.publish_status', "1");
    $this->db->where('igc_content.delete_status', "0");
    $this->db->where('multi_cat.category_id', $single_id);
    $this->db->order_by('igc_content.created','DESC')->limit(5);
    $result = $this->db->get()->result_array();
    return $result;



   }
    public function get_ads($table)
    {
        $this->db->where('publish_status', "1");
        $this->db->where('delete_status', "0");
        $this->db->order_by('created','Desc')->limit(1);

        $result = $this->db->get($table)->result_array();
        return $result;
    }
    public function get_recent_articles($table)
    {
        $this->db->where('publish_status', "1");
        $this->db->where('delete_status', "0");
        $this->db->order_by('created','Desc')->limit(5);

        $result = $this->db->get($table)->result_array();
        return $result;
    }
    public function selectShortUrl($url){

      $cx=$this->db->select('*')
                   ->where('content_id',$url)
                   ->get('igc_content')->row_array();
           // if ($cx->num_rows() == 1) {
           //     foreach ($cx->result() as $row) {
           //          $url_address = $row->fullurl;
           // }
                   // print_r($cx);
                   // exit(); 
       

  $cx1=$this->db->set('shorturl',($cx['shorturl']+1),FALSE)
                   ->where('content_id',$url)
                   ->update('igc_content');
        return $cx1;

        //    $this->updateShortUrl($cx);


        //    redirect (prep_url($url_address));
        //  }
        // else{
        //     redirect(base_url());
        // } 

}

// update clicks for short url
// public function updateShortUrl($shorturl){
//         $cx=$this->db->set('clicx','`clicx`+1',FALSE)
//                    ->where('shorturl',$shorturl)
//                    ->update('igc_content');
//         return $cx->result();
// }
   
   
// function get_all_category($limit, $start)
// {
//     $this->db->limit($limit, $start);
//     $this->db->select('publish_status');
//     $this->db->from('igc_package_category AS publish_status');
//     $this->db->where(array('publish_status'=>1));
//     $q = $this->db->get();
//     if($q->num_rows()>0)
//     {
//         return $q->result();
//     }
//     else 
//     {
//         return false;
//     }
// }   



}