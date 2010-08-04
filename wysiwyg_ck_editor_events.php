<?php
	/**
	 * events for ck_editor
	 */
	class WysiwygCkEditorEvents{
		function onRegisterWysiwyg(&$event){
			return 'ck_editor';
		}

		function onRequireJavascriptToLoad(&$event, $data){
			switch(true){
				case isset($data['admin']) && $data['admin']:
				case $data['action'] == 'edit':
					return '/wysiwyg_ck_editor/js/ckeditor';
					break;
			}

			return false;
		}
	}