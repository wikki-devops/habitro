<?php
defined("BASEPATH") or exit("No direct script access allowed");

class Welcome extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper("url", "form");
        $this->load->model("GetData");
    }

    public function user()
    {
        $data["users"] = $this->GetData->users();
        $data["view_page"] = "user";
        $this->load->view("welcome_message", $data);
    }

    public function logout()
    {
        // unset user data
        $this->session->unset_userdata("login");
        $this->session->unset_userdata("user_id");
        $this->session->unset_userdata("username");
        $this->session->unset_userdata("role_id");
        $this->session->unset_userdata("email");
        $this->session->unset_userdata("image");
        $this->session->unset_userdata("site_logo");

        //Set Message
        $this->session->set_flashdata("success", "You are logged out.");
        redirect(base_url() . "index");
    }

    public function index()
    {
        $this->form_validation->set_rules("email", "Email", "required");
        $this->form_validation->set_rules("password", "Password", "required");
        if ($this->form_validation->run() === false) {
            $this->load->view("login");
        } else {
            $this->load->model("GetData");
            $email = $this->input->post("email");
            $password = $this->input->post("password");
            $check_login = $this->GetData->user($email, $password);
            if ($check_login) {
                $this->session->set_userdata("user_id", $check_login["id"]);
                redirect(base_url() . "dashboard");
            } else {
                $this->session->set_flashdata(
                    "error_msg",
                    "Invalid email or password. Please try again."
                );
                $this->load->view("index");
            }
        }
    }
    public function adminLogin()
    {
        $this->form_validation->set_rules("email", "Email", "required");
        $this->form_validation->set_rules("password", "Password", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("login");
        } else {
            // get email and Encrypt Password
            $email = $this->input->post("email");
            $encrypt_password = md5($this->input->post("password"));

            $user_id = $this->GetData->adminLogin($email, $encrypt_password);

            if ($user_id && $user_id->status == 1) {
                //Create Session
                $user_data = [
                    "name" => $user_id->name,
                    "user_id" => $user_id->id,
                    "email" => $user_id->email,
                    "login" => true,
                    "role" => $user_id->role_id,
                ];

                $this->session->set_userdata($user_data);

                //Set Message
                $this->session->set_flashdata(
                    "success",
                    "Welcome to Habitro Admin Dashboard."
                );
                redirect(base_url() . "dashboard");
            } else {
                $this->session->set_flashdata(
                    "danger",
                    "Login Credential in invalid!"
                );
                redirect(base_url() . "index");
            }
        }
    }
    public function get_admin_data()
    {
        $data["changePassword"] = $this->GetData->get_admin_data();
        $data["view_page"] = "change-password";
        $this->load->view("welcome_message", $data);
    }
    public function change_password()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url("index"));
        }

        $data["view_page"] = "change-password";

        $this->form_validation->set_rules(
            "old_password",
            "Old Password",
            "required|callback_match_old_password"
        );
        $this->form_validation->set_rules(
            "new_password",
            "New Password Field",
            "required"
        );
        $this->form_validation->set_rules(
            "confirm_new_password",
            "Confirm New Password",
            "matches[new_password]"
        );

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->change_password($this->input->post("new_password"));

            //Set Message
            $this->session->set_flashdata(
                "success",
                "Password Has Been Changed Successfull."
            );
            redirect(base_url() . "change-password");
        }
    }
    public function match_old_password($old_password)
    {
        $this->form_validation->set_message(
            "match_old_password",
            "Current Password Does not matched, Please Try Again."
        );
        $password = md5($old_password);
        $que = $this->GetData->match_old_password($password);
        if ($que) {
            return true;
        } else {
            return false;
        }
    }
    //dashboard Page
    public function dashboard()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url("index"));
        }

        $user_data["email"] = $this->session->userdata();

        $this->db->select("id");
        $query1 = $this->db->get("testimonials");
        $count1 = $query1->num_rows();

        $this->db->select("id");
        $query2 = $this->db->get("leadform");
        $count2 = $query2->num_rows();

        $this->db->select("id");
        $query3 = $this->db->get("blogs");
        $count3 = $query3->num_rows();

        $this->db->select("id");
        $query4 = $this->db->get("user");
        $count4 = $query4->num_rows();

        $data = [
            "count1" => $count1,
            "count2" => $count2,
            "count3" => $count3,
            "count4" => $count4
        ];
        $data["leads"] = $this->GetData->getleadform();
        $data["blogs"] = $this->GetData->getblogs();
        $data["users"] = $this->GetData->users();
        $data["view_page"] = "dashboard";
        $this->load->view("welcome_message", $data, $user_data);
    }
    //lead form Page
    public function leadform()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url("index"));
        }
        $data["leads"] = $this->GetData->getleadform();
        $data["view_page"] = "pages/leadform";
        $this->load->view("welcome_message", $data);
    }
    public function update_lead($id)
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }

        $data["leads"] = $this->GetData->getleadform($id);
        $data["view_page"] = "edit/editleadform";

        $this->form_validation->set_rules(
            "name",
            "name",
            "required"
        );

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->update_lead($id);
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Lead Status Updated."
            );
            redirect(base_url() . "leads");
        }
    }

    public function pricing()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url("index"));
        }
        $data["pricing"] = $this->GetData->getpricing();
		$data['masterpricing'] = $this->GetData->getmasterpricing();
        $data["view_page"] = "pricing";
        $this->load->view("welcome_message", $data);
    }

    public function updatepricing($id)
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }

		$data['masterpricing'] = $this->GetData->getpricing($id);
        $data["view_page"] = "edit/updatepricing";

        $this->form_validation->set_rules("variant", "variant", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->update_pricing($id);
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Pricing Details Updated Successfully."
            );
            redirect(base_url() . "pricing");
        }
    }
    //gallery wall 
    public function gallery_wall()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url("index"));
        }
        $data["gallery"] = $this->GetData->getgallery();
        $data["view_page"] = "gallery-wall";
        $this->load->view("welcome_message", $data);
    }
    public function update_gallery()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }

        $data["gallery"] = $this->GetData->getgallery();
        $data["view_page"] = "add/add-gallery";

        $this->form_validation->set_rules("image", "image", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->update_gallery();
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Gallery Wall Updated Successfully."
            );
            redirect(base_url() . "gallery-wall");
        }
    }


    //Home Page
    public function home()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url("index"));
        }
        $data["menu"] = $this->GetData->getmenu();
        $data["view_page"] = "pages/home";
        $this->load->view("welcome_message", $data);
    }

    public function update_menu($id)
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url("index"));
        }
        $data["menu"] = $this->GetData->getmenu();
        $data["view_page"] = "pages/home";

        $this->form_validation->set_rules("slug", "slug", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
            //Set Message
        } else {
            $this->GetData->update_menu($id);
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Menu Content Updated Successfully."
            );
            redirect(base_url() . "home");
        }
    }
    // Residential Page
    public function residential()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }

        $data["cards"] = $this->GetData->getresidentialcard();
        $data["brands"] = $this->GetData->getresidentialbrands();
        $data["view_page"] = "pages/residential";
        $this->load->view("welcome_message", $data);
    }
    public function add_residential($page = "add-residential")
    {
        $this->load->helper("form");
        $this->load->model("GetData");
        $data["view_page"] = "add/add-residential";

        $this->form_validation->set_rules("image", "image", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->addresidential();
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Residential Card Content has been created."
            );
            redirect(base_url() . "residential");
        }
    }
    public function add_residentialpartner($page = "add-residentialpartner")
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }
        $data["view_page"] = "add/add-residentialpartner";

        $this->form_validation->set_rules("image", "image", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->add_residentialpartner();
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Associate Partners Logo added sucessfully."
            );
            redirect(base_url() . "residential");
        }
    }

    //Commercial page

    public function commercial()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }
        $data["tailcontent"] = $this->GetData->getcommercial();
        $data["recentwork"] = $this->GetData->getrecentwork();
        $data["view_page"] = "pages/commercial";
        $this->load->view("welcome_message", $data);
    }
    public function update_tail($id)
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }

        $data["tailcontent"] = $this->GetData->getcommercial($id);
        $data["view_page"] = "edit/edittail";

        $this->form_validation->set_rules("heading", "heading", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->update_tail($id);
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Tail Content Updated Successfully."
            );
            redirect(base_url() . "commercial");
        }
    }
    public function add_tail($page = "add-tail")
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }
        $data["view_page"] = "add/add-tail";

        $this->form_validation->set_rules("heading", "heading", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->add_tail();
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Tail Content added has been created."
            );
            redirect(base_url() . "commercial");
        }
    }
    public function add_recentwork($page = "add-recentwork")
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }
        $data["view_page"] = "add/add-recentwork";

        $this->form_validation->set_rules("image", "image", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->add_recentwork();
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Tail Content added has been created."
            );
            redirect(base_url() . "commercial");
        }
    }

    //construction Page
    public function construction()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url("index"));
        }
        $data["package"] = $this->GetData->getconstruction();
        $data["brands"] = $this->GetData->getbrands();
        $data["view_page"] = "pages/construction";
        $this->load->view("welcome_message", $data);
    }

    public function update_package($id)
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }

        $data["package"] = $this->GetData->getconstruction($id);
        $data["view_page"] = "edit/editpackage";

        $this->form_validation->set_rules("title", "title", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->update_package($id);
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Package Details Updated Successfully."
            );
            redirect(base_url() . "construction");
        }
    }

    public function add_package($page = "add-package")
{
    // Check login
    if (!$this->session->userdata("login")) {
        redirect(base_url() . "index");
    }

    $data["view_page"] = "add/add-package";

    // Assuming you have other form validation rules here

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $title = $this->input->post('title');

        // Assuming you have validation rules for the title field

        // Array of packages to be inserted
        $packages = array('standard', 'premium', 'luxury');

        foreach ($packages as $package) {
            // Insert each package into the database with the same title
            $data_to_insert = array(
                'title' => $title,
                'package' => $package,
                // Add other fields as needed
            );

            $this->GetData->addpackage($data_to_insert); // Assuming this method inserts the package into the database
        }

        // Set Message
        $this->session->set_flashdata(
            "success",
            "Package details Updated."
        );
        redirect("construction");
    } else {
        $this->load->view("welcome_message", $data);
    }
}

    public function add_partner($page = "add-partner")
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }
        $data["view_page"] = "add/add-partner";

        $this->form_validation->set_rules("image", "image", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->add_partner();
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Associate Partners Logo added sucessfully."
            );
            redirect(base_url() . "construction");
        }
    }
    //renovation page
    public function renovation()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }
        $data["renovation"] = $this->GetData->getrenovation();
        $data["view_page"] = "pages/renovation";
        $this->load->view("welcome_message", $data);
    }

    public function add_renovation($page = "add_renovation")
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }
        $data["view_page"] = "add/add-renovation";

        $this->form_validation->set_rules("first", "first", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->add_renovation();
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Renovation Slider added has been created."
            );
            redirect(base_url() . "renovation");
        }
    }

    //Company Profile Page

    public function profile()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url("index"));
        }
        $data["company"] = $this->GetData->getcompany();
        $data["social"] = $this->GetData->getcompany();
        $data["view_page"] = "profile";
        $this->load->view("welcome_message", $data);
    }

    public function update_profile($id)
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }

        $data["company"] = $this->GetData->getlistcompany($id);
        $data["view_page"] = "edit/profile";

        $this->form_validation->set_rules("heading", "heading", "required");
        $this->form_validation->set_rules("name", "name", "name");

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->update_profile($id);
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Company Profile Updated Successfully."
            );
            redirect(base_url() . "profile");
        }
    }
    //banner Section
    public function banner()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url("index"));
        }
        $data["banners"] = $this->GetData->getbanner();
        $data["view_page"] = "banner";
        $this->load->view("welcome_message", $data);
    }
    public function update_banner($id)
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }

        $data["banner"] = $this->GetData->getlistbanner($id);
        $data["view_page"] = "edit/editbanner";

        $this->form_validation->set_rules(
            "page_heading",
            "page_heading",
            "required"
        );

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->update_banner($id);
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Banner Content Updated Successfully."
            );
            redirect(base_url() . "banner");
        }
    }

    //cta section
    public function call_to_action()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url("index"));
        }

        $data["calltoaction"] = $this->GetData->getcalltoaction();
        $data["view_page"] = "call-to-action";
        $this->load->view("welcome_message", $data);
    }
    public function update_cta($id)
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }

        $data["calltoaction"] = $this->GetData->getlistcta($id);
        $data["view_page"] = "edit/editcta";

        $this->form_validation->set_rules(
            "page_title",
            "page_title",
            "required"
        );

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->update_cta($id);
            //Set Message
            $this->session->set_flashdata(
                "success",
                "CTA Content Updated Successfully."
            );
            redirect(base_url() . "call-to-action");
        }
    }
    // testimonials section
    public function testimonials()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url("index"));
        }
        $data["testimonials"] = $this->GetData->gettestimonials();
        $data["view_page"] = "testimonials";
        $this->load->view("welcome_message", $data);
    }
    public function add_testimonials($page = "add-testimonials")
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }

        $data["view_page"] = "add/add-testimonials";

        $this->form_validation->set_rules("testimonial", "testimonial", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->addtestimonials();
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Testimonials Content has been created."
            );
            redirect(base_url() . "testimonials");
        }
    }

    public function delete($id)
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }

        $table = base64_decode($this->input->get("table"));
        $this->GetData->delete($id, $table);
        $this->session->set_flashdata(
            "Error",
            "Data has been deleted Successfully."
        );
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }

    public function blogs()
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url("index"));
        }
        $data["blogs"] = $this->GetData->getblogs();
        $data["view_page"] = "blogs/blogs";
        $this->load->view("welcome_message", $data);
    }

    public function add_blog($page = "add-blog")
    {
        // Check login
        if (!$this->session->userdata("login")) {
            redirect(base_url() . "index");
        }

        $data["view_page"] = "blogs/add-blog";

        $this->form_validation->set_rules("image", "image", "required");

        if ($this->form_validation->run() === false) {
            $this->load->view("welcome_message", $data);
        } else {
            $this->GetData->addblog();
            //Set Message
            $this->session->set_flashdata(
                "success",
                "Blog Content has been created."
            );
            redirect(base_url() . "blogs");
        }
    }


}
