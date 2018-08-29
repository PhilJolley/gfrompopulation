//function create a shortcode for link to dynamically populate gform data
// your_parameter is what you you put in the parameter name
// remember, I'm taking the slug of the post
//[btn_gform_value]
function btn_gform_value(){
    global $post;
    return '<a class="et_pb_button et_pb_module et_pb_button_0 et_pb_bg_layout_light tour" href="http://revive-humanity.devft.com/register/?your_parameter='. $post->post_name .'">Register</a>';
}
add_shortcode('btn_gform_value', 'btn_gform_value');
