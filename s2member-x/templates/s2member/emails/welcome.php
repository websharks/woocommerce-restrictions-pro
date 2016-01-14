<?php
namespace s2member;
/**
 * Template.
 *
 * Copyright: © 2012 (coded in the USA)
 * {@link http://www.websharks-inc.com WebSharks™}
 *
 * @author JasWSInc
 * @package s2Member\Templates
 * @since 120318
 *
 * @note All WordPress® template tags are available for use in this template.
 *    See: {@link http://codex.wordpress.org/Template_Tags}
 *    See: {@link http://codex.wordpress.org/Conditional_Tags}
 *
 * @note The current plugin instance is available through the special keyword: ``$this``.
 * @var $this \websharks_core_v000000_dev\templates|framework Template instance (extends framework).
 */
if(!defined('WPINC'))
	exit('Do NOT access this file directly: '.basename(__FILE__));
?>
<!-- BEGIN: XML Template Config
   (this does NOT appear in final content) -->

<template-config file="emails/welcome.php">
	<from_name><?php echo esc_html(get_bloginfo('name')); ?></from_name>
	<from_addr><?php echo esc_html(get_bloginfo('admin_email')); ?></from_addr>
	<subject><?php echo sprintf($this->translate('Login Details (Welcome To: %1$s)'), esc_html(get_bloginfo('name'))); ?></subject>
	<recipients><?php echo esc_html($this->data->user->email); ?></recipients>
</template-config>

<!-- / END: XML Template Config -->

<!-- BEGIN: HTML -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title><?php echo $this->translate('Login Details'); ?></title>
	<?php $this->email_styles(); ?>
</head>
<body>

<div class="<?php echo esc_attr($this->email_wrapper_classes('email-wrapper')); ?>">
	<div class="email-container">

		<div class="header-wrapper">
			<div class="header-container">

				<!-- BEGIN: Header -->
				<?php echo $this->email_header(); ?>
				<!-- / END: Header -->

			</div>
		</div>

		<div class="content-wrapper">
			<div class="content-container">

				<!-- BEGIN: Message Body -->

				<h3><?php echo $this->translate('Account Login Details'); ?></h3>
				<p>
					<?php echo $this->translate('Username:'); ?> <code style="font-size:14px;"><?php echo esc_html($this->data->user->username); ?></code><br />
					<?php echo $this->translate('Password:'); ?> <code style="font-size:14px;"><?php echo esc_html($this->data->password); ?></code>
				</p>
				<p>
					<?php echo $this->translate('Login URL:'); ?> <a href="<?php echo esc_attr($this->©systematic->url('login')); ?>"><?php echo esc_html($this->©systematic->url('login')); ?></a>
				</p>

				<!-- / END: Message Body -->

			</div>
		</div>

		<div class="footer-wrapper">
			<div class="footer-container">

				<!-- BEGIN: Footer -->
				<?php echo $this->email_footer(); ?>
				<!-- / END: Footer -->

			</div>
		</div>

	</div>
</div>

</body>
</html>

<!-- / END: HTML -->