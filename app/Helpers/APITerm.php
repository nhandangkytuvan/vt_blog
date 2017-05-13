<?php 
namespace App\Helpers;
use Illuminate\Http\Request;
class APITerm {
    public static function getOptionSelect($terms,$term_id = 0,$parent_id = 0,$char = ''){
        foreach ($terms as $key => $term){
            if ($term->term_id == $parent_id){
                unset($terms[$key]);
                $selected = $term->id == $term_id ? 'selected' : '';
                echo '<option '.$selected.' value="'.$term->id.'">'.$char.$term->name.'</option>';
                self::getOptionSelect($terms,$term_id,$term->id,$char.'|---');
            }
        }
    }
}