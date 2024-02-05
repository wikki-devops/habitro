<?php
class GetData extends CI_Model
{
    public function getrenovation()
    {
        $this->load->database();
        return $this->db->get("renovation")->result_array();
    }
    public function getconstruction()
    {
        $this->load->database();
        return $this->db->get("package")->result_array();
    }
    public function getmenu()
    {
        $this->load->database();
        return $this->db->get("menu")->result_array();
    }
    public function getbrands()
    {
        $this->load->database();
        return $this->db->get("brands")->result_array();
    }

    public function users()
    {
        $this->load->database();
        return $this->db->get("user")->result_array();
    }

    public function adminLogin($email, $encrypt_password)
    {
        $this->load->database();
        //Validate
        $this->db->where("email", $email);
        $this->db->where("password", $encrypt_password);

        $result = $this->db->get("user");

        if ($result->num_rows() == 1) {
            return $result->row(0);
        } else {
            return false;
        }
    }

    public function getcompany()
    {
        $this->load->database();
        return $this->db->get("company")->result_array();
    }

    public function getlistcompany($id = false, $limit = false, $offset = false)
    {
        $this->load->database();
        if ($limit) {
            $this->db->limit($limit, $offset);
        }

        if ($id === false) {
            $query = $this->db->get("company");
            return $query->result_array();
        }

        $query = $this->db->get_where("company", ["id" => $id]);
        return $query->row_array();
    }
    public function update_profile($id)
    {
        $this->load->database();
        $data = [
            "heading" => $this->input->post("heading"),
            "content" => $this->input->post("content"),
        ];
        $this->db->where("id", $this->input->post("id"));
        return $this->db->update("company", $data);
    }

    public function getbanner()
    {
        $this->load->database();
        return $this->db->get("banner")->result_array();
    }

    public function getlistbanner($id = false, $limit = false, $offset = false)
    {
        $this->load->database();
        if ($limit) {
            $this->db->limit($limit, $offset);
        }

        if ($id === false) {
            $query = $this->db->get("banner");
            return $query->result_array();
        }

        $query = $this->db->get_where("banner", ["id" => $id]);
        return $query->row_array();
    }

    public function update_banner($id)
    {
        $this->load->database();
        $data = [
            "page_heading" => $this->input->post("page_heading"),
            "bannerimage" => $this->input->post("bannerimage"),
            "heading" => $this->input->post("heading"),
            "banner_p" => $this->input->post("banner_p"),
            "component" => $this->input->post("component"),
        ];
        $this->db->where("id", $this->input->post("id"));
        return $this->db->update("banner", $data);
    }

    //cta section
    public function getcalltoaction()
    {
        $this->load->database();
        return $this->db->get("calltoaction")->result_array();
    }

    public function getlistcta($id = false, $limit = false, $offset = false)
    {
        $this->load->database();
        if ($limit) {
            $this->db->limit($limit, $offset);
        }

        if ($id === false) {
            $query = $this->db->get("calltoaction");
            return $query->result_array();
        }

        $query = $this->db->get_where("calltoaction", ["id" => $id]);
        return $query->row_array();
    }
    public function update_cta($id)
    {
        $this->load->database();
        $data = [
            "page_title" => $this->input->post("page_title"),
            "copyhead" => $this->input->post("copyhead"),
        ];
        $this->db->where("id", $this->input->post("id"));
        return $this->db->update("calltoaction", $data);
    }
    //testimonials section


    public function gettestimonials()
    {
        $this->load->database();
        return $this->db->get("testimonials")->result_array();
    }
    public function addtestimonials()
    {
        $this->load->database();
        $data = [
            "thumbnail" => $this->input->post("thumbnail"),
            "video" => $this->input->post("video"),
            "name" => $this->input->post("name"),
            "company" => $this->input->post("company"),
        ];
        return $this->db->insert("testimonials", $data);
    }

    //page content - residential
    public function getresidentialcard()
    {
        $this->load->database();
        return $this->db->get("residentialcard")->result_array();
    }

    public function addresidential()
    {
        $this->load->database();
        $data = [
            "image" => $this->input->post("image"),
            "content" => $this->input->post("content"),
            "descripition" => $this->input->post("descripition"),
            "content_2" => $this->input->post("content_2"),
            "descripition_2" => $this->input->post("descripition_2"),
        ];
        return $this->db->insert("residentialcard", $data);
    }
    //page content - commercial

    public function getcommercial($id = false, $limit = false, $offset = false)
    {
        $this->load->database();
        if ($limit) {
            $this->db->limit($limit, $offset);
        }

        if ($id === false) {
            $query = $this->db->get("commercial");
            return $query->result_array();
        }

        $query = $this->db->get_where("commercial", ["id" => $id]);
        return $query->row_array();
    }
    public function update_tail()
    {
        $this->load->database();
        $data = [
            "image" => $this->input->post("image"),
            "heading" => $this->input->post("heading"),
            "paragraph" => $this->input->post("paragraph"),
        ];
        $this->db->where("id", $this->input->post("id"));
        return $this->db->update("commercial", $data);

    }
    public function add_tail()
    {
        $this->load->database();
        $data = [
            "image" => $this->input->post("image"),
            "heading" => $this->input->post("heading"),
            "paragraph" => $this->input->post("paragraph"),
        ];
        return $this->db->insert("commercial", $data);
    }


    public function getrecentwork($id = false, $limit = false, $offset = false)
    {
        $this->load->database();
        if ($limit) {
            $this->db->limit($limit, $offset);
        }
        if ($id === false) {
            $query = $this->db->get("recentwork");
            return $query->result_array();
        }

        $query = $this->db->get_where("recentwork", ["id" => $id]);
        return $query->row_array();
    }

    public function add_recentwork()
    {
        $this->load->database();
        $data = [
            "image" => $this->input->post("image"),
            "video" => $this->input->post("video"),
        ];
        return $this->db->insert("recentwork", $data);
    }

    //page content - renovation

    public function add_renovation()
    {
        $this->load->database();
        $data = [
            "first" => $this->input->post("first"),
            "second" => $this->input->post("second"),
        ];
        return $this->db->insert("renovation", $data);
    }

    public function delete($id, $table)
    {
        $this->load->database();
        $this->db->where("id", $id);
        $this->db->delete($table);
        return true;
    }
    public function get_admin_data()
    {
        $id = $this->session -> userdata('user_id');
        if($id === FALSE){
            $query = $this->db->get('users');
            return $query->result_array(); 
        }

        $query = $this->db->get_where('user', array('id' => $id));
        return $query->row_array();
    }

    public function change_password($new_password){

        $data = array(
            'password' => md5($new_password)
            );
        $this->db->where('id', $this->session->userdata('user_id'));
        return $this->db->update('user', $data);
    }
    public function match_old_password($password)
    {
        $id = $this->session -> userdata('user_id');
        if($id === FALSE){
            $query = $this->db->get('user');
            return $query->result_array(); 
        }

        $query = $this->db->get_where('user', array('password' => $password));
        return $query->row_array();

    }

}