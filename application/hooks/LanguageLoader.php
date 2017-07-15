<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class LanguageLoader
{
    function initialize() {
        $ci =& get_instance();
        $ci->load->helper('language');
        $siteLang = $ci->session->userdata('site_lang');
        if ($siteLang) {
            $ci->lang->load('common',$siteLang);
            $ci->lang->load('shoplist',$siteLang);
            $ci->lang->load('signup',$siteLang);
            $ci->lang->load('activities',$siteLang);
            $ci->lang->load('admin',$siteLang);
            $ci->lang->load('booking',$siteLang);
            $ci->lang->load('customer',$siteLang);
            $ci->lang->load('home',$siteLang);
            $ci->lang->load('hotlist',$siteLang);
            $ci->lang->load('shop_admin',$siteLang); 
            $ci->lang->load('shop',$siteLang);
            $ci->lang->load('specialGuide',$siteLang);
            $ci->lang->load('specialMember',$siteLang);
        } else {
            $ci->lang->load('common','english');
            $ci->lang->load('shoplist','english');
            $ci->lang->load('signup','english');
            $ci->lang->load('activities','english');
            $ci->lang->load('admin','english');
            $ci->lang->load('booking','english');
            $ci->lang->load('customer','english');
            $ci->lang->load('home','english');
            $ci->lang->load('hotlist','english');
            $ci->lang->load('shop_admin','english'); 
            $ci->lang->load('shop','english');
            $ci->lang->load('specialGuide','english');
            $ci->lang->load('specialMember','english');
        }
    }
}