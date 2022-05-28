/*import { FormeoEditor, FormeoRenderer } from 'formeo'

// Set up a form builder
const editor = new FormeoEditor() // or:
//const editor = new FormeoEditor(options, formData)

// When you're ready, grab the form data object
// Typically you'd do this in the "onSave" event, which you can configure through the editor's options object
const formData = editor.formData

// Then, when you're ready to render the form, use
const renderer = new FormeoRenderer(options)
renderer.render(formData)
//$('#form_builder_div').html(formData);*/

$(document).ready(function(){
    console.log('Hey');
	$.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  	})
  	
	var options = {
      onSave: function(evt, formData) {
          //toggleEdit();
          //$('.render-wrap').formRender({formData});
          //window.sessionStorage.setItem('formData', JSON.stringify(formData));
          $.ajax({
			type:"POST",
			url:"/save-template",
			data:{
				formData : formData,
			},
			success: function(data)
			{
			$("#country").empty();
				window.location.replace('/song/create')
			},
			error: function(data)
			{
				console.log(data);
				console.log("Error");
			}
		});
        },
    };

	$('#fb-editor').formBuilder(options);
});