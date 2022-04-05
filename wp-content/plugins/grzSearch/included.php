<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>Document</title>
</head>

<body>

    <?php 

$post_type= get_post_types();
$not_used= array('attachment','revision','nav_menu_item','custom_css','customize_changeset','oembed_cache','user_request','wp_block','wp_template','wp_template_part','wp_global_styles','wp_navigation','acf-field-group','acf-field');
$post_type=array_diff ( $post_type , $not_used );


?>
    <h3>Select post type</h3>

    <select name="post_type" id="post_type" multiple>
        <option value="" disabled selected>Choose post type</option>

        <?php foreach($post_type as $key => $value){?>

        <option value="<?php echo $key ?>"><?php echo $value ?></option>
        <?php } ?>
    </select>
    <?php 
$menuLocations = get_nav_menu_locations();
$menuID = $menuLocations['primary_menu']; 

$primaryNav = wp_get_nav_menu_items($menuID);
echo"<pre>";
print_r($primaryNav);
echo"</pre>";
?>
    <input type="text" class="getPost">
    <div id="demo"></div>
</body>

</html>