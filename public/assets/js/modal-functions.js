/* 
|---------------------------------------------------------------------------
| CATEGORY MODALS
|---------------------------------------------------------------------------
*/
// EDIT
$('#categoryEdit').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget);
	var action = button.data('action');
	var category = button.data('category');
	var modal = $(this);
	$('#title').val(category.title);
	modal.find('#status').val(category.status);
	modal.find('#editForm').attr('action', action);
});
// DELETE
$('#categoryDelete').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget);
	var action = button.data('id');
	var category = button.data('category');
	var modal = $(this);
	modal.find('#deleteForm').attr('action', action);
	modal.find('#name').text(category.title);

});

/* 
|---------------------------------------------------------------------------
| SERIE MODALS
|---------------------------------------------------------------------------
*/
// EDIT
$('#serieEdit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var action = button.data('action');
    console.log(action)
    var serie = button.data('serie');
    var modal = $(this);
    $('#title').val(serie.title);
    modal.find('#status').val(serie.status);
    modal.find('#editForm').attr('action', action);
});
// DELETE
$('#serieDelete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var action = button.data('id');
    var serie = button.data('serie');
    var modal = $(this);
    modal.find('#deleteForm').attr('action', action);
    modal.find('#name').text(serie.name);

});


/* 
|---------------------------------------------------------------------------
| ARTIST MODALS
|---------------------------------------------------------------------------
*/
// EDIT
$('#artistEdit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var action = button.data('action');
    var artist = button.data('artist');
    var modal = $(this);
    $('#full_name').val(artist.full_name);
    $('#artistic_name').val(artist.artistic_name);
    $('#email').val(artist.email);
    modal.find('#status').val(artist.status);
    modal.find('#editForm').attr('action', action);
});
// DELETE
$('#artistDelete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var action = button.data('id');
    var artist = button.data('artist');
    var modal = $(this);
    modal.find('#deleteForm').attr('action', action);
    modal.find('#name').text(artist.artistic_name);

});


/* 
|---------------------------------------------------------------------------
| TECHNIQUE MODALS
|---------------------------------------------------------------------------
*/
// EDIT
$('#techniqueEdit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var action = button.data('action');
    var technique = button.data('technique');
    var modal = $(this);
    $('#title').val(technique.title);
    modal.find('#status').val(technique.status);
    modal.find('#editForm').attr('action', action);
});
// DELETE
$('#techniqueDelete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var action = button.data('id');
    var technique = button.data('technique');
    var modal = $(this);
    modal.find('#deleteForm').attr('action', action);
    modal.find('#name').text(technique.name);

});
