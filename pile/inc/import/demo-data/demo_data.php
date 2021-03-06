<?php
/**
 * Code that holds details about the demo data to import (via AJAX)
 * Like the theme options, widgets, menus, settings
 *
 * @package Pile
 * @since   Pile 2.0
 */

$demo_menus = array(
	'main_menu'   => esc_html__( 'Header Menu', 'pile' ),
	'social_menu' => esc_html__( 'Social Icons Header Menu', 'pile' ),
);

$demo_reading_pages = array(
	'front' => 'Welcome to Front Page',
	'blog'  => 'News'
);

//The export from the Theme Options - base64 encoded: http://www.base64encode.org/
// Encode in base64 with http://www.opinionatedgeek.com/dotnet/tools/base64encode because base64encode.org lacks in memory and it cannot decode long strings
$theme_options = "eyAibGl2ZV9jc3NfZWRpdCI6ICJcLypcbiAqIFdlbGNvbWUgdG8gdGhlIEN1c3RvbSBDU1MgRWRpdG9yXG4gKlxuICogQ1NTIChDYXNjYWRpbmcgU3R5bGUgU2hlZXRzKSBpcyBhIGxhbmd1YWdlIHRoYXQgaGVscHNcbiAqIHRoZSBicm93c2VyIHJlbmRlciB5b3VyIHdlYnNpdGUuIFlvdSBtYXkgcmVtb3ZlIHRoZXNlXG4gKiBsaW5lcyBhbmQgZ2V0IHN0YXJ0ZWQgd2l0aCB5b3VyIG93biBjdXN0b21pemF0aW9ucy5cbiAqXG4gKiBUaGUgZ2VuZXJhdGVkIGNvZGUgd2lsbCBiZSBwbGFjZWQgYWZ0ZXIgdGhlIHRoZW1lXG4gKiBzdHlsZXNoZWV0cywgd2hpY2ggbWVhbnMgdGhhdCB5b3VyIHJ1bGVzIGNhbiB0YWtlXG4gKiBwcmVjZWRlbmNlIGFuZCBvdmVycmlkZSB0aGUgdGhlbWUgQ1NTIHJ1bGVzLiBKdXN0XG4gKiB3cml0ZSBoZXJlIHdoYXQgeW91IHdhbnQgdG8gY2hhbmdlLCB5b3UgZG9uJ3QgbmVlZFxuICogdG8gY29weSBhbGwgeW91ciB0aGVtZSdzIHN0eWxlc2hlZXQgY29udGVudC5cbiAqXG4gKiBHZXR0aW5nIHN0YXJ0ZWQgd2l0aCBDU1MgKHR1dG9yaWFsKTpcbiAqIGh0dHA6XC9cL2JpdC5seVwvY3NzLWdldHRpbmctc3RhcnRlZFxuICpcL1xuXG5cLyogQW4gZXhhbXBsZSBvZiBhIEN1c3RvbSBDU1MgU25pcHBldCAqXC9cbmg0IHtcbiAgICBmb250LXdlaWdodDogNTAwO1xufVxuXG4uYXJ0aWNsZV9fbW9yZSB7XG4gICAgZm9udC13ZWlnaHQ6IDQwMDtcbn0iLCAicGlsZV9vcHRpb25zIjogImE6MjU6e3M6MTM6XCJjb250ZW50X3dpZHRoXCI7czo0OlwiMTAwMVwiO3M6MTU6XCJuYXZfc2hvd19zY3JvbGxcIjtiOjA7czoxNDpcInNob3dfY2FydF9tZW51XCI7YjowO3M6MjM6XCJoZWFkZXJfYmFja2dyb3VuZF9jb2xvclwiO3M6NzpcIiNmZmZmZmZcIjtzOjEzOlwiaGVhZGVyX2hlaWdodFwiO3M6MjpcIjkwXCI7czoxNTpcImhlYWRlcl9wb3NpdGlvblwiO3M6NjpcInN0YXRpY1wiO3M6MTg6XCJoZWFkZXJfdHJhbnNwYXJlbnRcIjtiOjE7czoxNDpcIm1haW5fbG9nb19kYXJrXCI7aToxNTg4O3M6MjI6XCJzbGlkZXNob3dfYXJyb3dzX3N0eWxlXCI7czo2Olwic3RhdGljXCI7czoxNzpcImhlcm9fc2Nyb2xsX2Fycm93XCI7YjoxO3M6MTQ6XCJjb3B5cmlnaHRfdGV4dFwiO3M6Njc6XCJcdTAwYTkgUGl4ZWxHcmFkZSAyMDE2IFx1MjAxMyBUYXZpc3RvY2sgSG91c2UgMTN0aCwgTG9uZG9uLCBVbml0ZWQgS2luZ2RvbVwiO3M6MTU6XCJtYWluX2xvZ29fbGlnaHRcIjtpOjE1ODk7czoxMzpcImxvZ29fcHJvZ3Jlc3NcIjtpOjE1ODk7czoyMTpcImdlbmVyYWxfY29udGVudF93aWR0aFwiO3M6NDpcIjEwMDFcIjtzOjIyOlwic2hhcmVfYnV0dG9uc19zZXR0aW5nc1wiO3M6Mjk6XCJwcmVmZXJyZWQscHJlZmVycmVkLHByZWZlcnJlZFwiO3M6MTQ6XCJib2R5LWZvbnQtc2l6ZVwiO3M6MjpcIjE1XCI7czoxNjpcImJvZHktbGluZS1oZWlnaHRcIjtzOjM6XCIxLjhcIjtzOjE1OlwicGFyYWxsYXhfYW1vdW50XCI7czoyOlwiNjBcIjtzOjE2OlwidXNlX2FqYXhfbG9hZGluZ1wiO2I6MTtzOjE0OlwicGlsZV8zZF90YXJnZXRcIjtzOjQ6XCJpdGVtXCI7czoxOTpcInBpbGVfM2RfdGFyZ2V0X3J1bGVcIjtzOjM6XCJvZGRcIjtzOjE4OlwiZ29vZ2xlX3RpdGxlc19mb250XCI7czoxNzI6XCJ7XCJ0eXBlXCI6XCJzdGRcIixcImZvbnRfZmFtaWx5XCI6XCJUcnVlbm9cIixcInZhcmlhbnRzXCI6e1wiMFwiOlwiMTAwXCIsXCIxXCI6XCIyMDBcIixcIjNcIjpcIjMwMFwiLFwiNFwiOlwiNDAwXCIsXCI1XCI6XCI1MDBcIixcIjZcIjpcIjYwMFwiLFwiN1wiOlwiNzAwXCIsXCI4XCI6XCI4MDBcIixcIjlcIjpcIjkwMFwifSxcInNlbGVjdGVkX3ZhcmlhbnRzXCI6e1wiMFwiOlwiNzAwXCJ9fVwiO3M6MjM6XCJwaWxlX2hvcml6b250YWxfc3BhY2luZ1wiO3M6MjpcIjQwXCI7czoyMTpcInBpbGVfdmVydGljYWxfc3BhY2luZ1wiO3M6MjpcIjQwXCI7czoxOTpcImJsb2dfcmVhZF9tb3JlX3RleHRcIjtzOjE2OlwiQ29udGludWUgUmVhZGluZ1wiO30ifQ0K";

//The export of the widgets using this plugin http://wordpress.org/plugins/widget-settings-importexport/ - base64 encoded: http://www.base64encode.org/
$demo_widgets = "W3sic2lkZWJhci1mb290ZXIiOlsidGV4dC0yIl19LHsidGV4dCI6eyIyIjp7InRpdGxlIjoiIiwidGV4dCI6IiIsImZpbHRlciI6ZmFsc2UsInNvY2lhbF9tZW51IjpmYWxzZX0sIl9tdWx0aXdpZGdldCI6MX19XQ==";
