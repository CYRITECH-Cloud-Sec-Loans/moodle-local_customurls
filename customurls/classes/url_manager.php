<?php
// Fichier : local/customurls/classes/url_manager.php

namespace local_customurls;

class url_manager {
    
    /**
     * Génère une URL propre pour un cours
     */
    public static function get_course_url($course) {
        global $CFG;
        
        if (is_object($course)) {
            $shortname = $course->shortname;
        } else {
            $course_record = get_course($course);
            $shortname = $course_record->shortname;
        }
        
        return $CFG->wwwroot . '/course/' . urlencode($shortname);
    }
    
    /**
     * Génère une URL propre pour un profil utilisateur
     */
    public static function get_user_profile_url($user) {
        global $CFG;
        
        if (is_object($user)) {
            $username = $user->username;
        } else {
            $user_record = \core_user::get_user($user);
            $username = $user_record->username;
        }
        
        return $CFG->wwwroot . '/user/profile/' . urlencode($username);
    }
    
    /**
     * Génère une URL propre pour une catégorie
     */
    public static function get_category_url($category) {
        global $CFG;
        
        if (is_object($category)) {
            $id = $category->id;
            $name = $category->name;
        } else {
            $category_record = \core_course_category::get($category);
            $id = $category_record->id;
            $name = $category_record->name;
        }
        
        $clean_name = preg_replace('/[^a-zA-Z0-9-_]/', '-', strtolower($name));
        return $CFG->wwwroot . '/course/category/' . $id . '/' . $clean_name;
    }
}
?>