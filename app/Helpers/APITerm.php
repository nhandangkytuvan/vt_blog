<?php 
namespace App\Helpers;
use Illuminate\Http\Request;
class APITerm {
    public static function getOptionSelectBladeTerm($terms,$term_id = 0,$term_parent_id = 0,$parent_id = 0,$char = ''){
        foreach ($terms as $key => $term){
            if($term->id == $term_id){unset($terms[$key]);continue;}
            if ($term->term_id == $parent_id){
                unset($terms[$key]);
                $selected = $term->id == $term_parent_id ? 'selected' : '';
                echo '<option '.$selected.' value="'.$term->id.'">'.$char.$term->name.'</option>';
                self::getOptionSelectBladeTerm($terms,$term_id,$term_parent_id,$term->id,$char.'|---');
            }
        }
    }
    public static function getOptionSelectBladePost($terms,$term_id = 0,$parent_id = 0,$char = ''){
        foreach ($terms as $key => $term){
            if ($term->term_id == $parent_id){
                unset($terms[$key]);
                $selected = $term->id == $term_id ? 'selected' : '';
                echo '<option '.$selected.' value="'.$term->id.'">'.$char.$term->name.'</option>';
                self::getOptionSelectBladePost($terms,$term_id,$term->id,$char.'|---');
            }
        }
    }
}