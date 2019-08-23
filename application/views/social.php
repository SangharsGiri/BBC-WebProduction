<?php
$settings = $this->site_settings_model->get_site_settings();
?>

<aside id="sticky-social">
    <ul>
        <li><a href="<?php echo (isset($settings['facebook_link']) && $settings['facebook_link'] !="")? $settings['facebook_link']:"";?>" class="entypo-linkedin" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i><span></span></a></li>
        <li><a href="<?php echo (isset($settings['twiter_link']) && $settings['twiter_link'] !="")? $settings['twiter_link']:"";?>" class="entypo-twitter" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i><span></span></a></li>
        <li><a href="<?php echo (isset($settings['linked_in']) && $settings['linked_in'] !="")? $settings['linked_in']:"";?>" class="entypo-linkedin" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i><span></span></a></li>
    </ul>
</aside>