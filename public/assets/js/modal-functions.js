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
// SOFT DELETE
$('#categorySoftDelete').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget);
	var action = button.data('action');
	var category = button.data('category');
	var modal = $(this);
	modal.find('#softDeleteForm').attr('action', action);
	modal.find('#categoryName').text(category.name);

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
$('#serieSoftDelete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var action = button.data('action');
    var serie = button.data('serie');
    var modal = $(this);
    modal.find('#softDeleteForm').attr('action', action);
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
    $('#artistic_name').val(artist.artistic_name);
    modal.find('#status').val(artist.status);
    modal.find('#editForm').attr('action', action);
});
// DELETE
$('#artistSoftDelete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var action = button.data('action');
    var artist = button.data('artist');
    var modal = $(this);
    modal.find('#softDeleteForm').attr('action', action);
    modal.find('#artistName').text(artist.artistic_name);

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
    $('#name').val(technique.name);
    modal.find('#editForm').attr('action', action);
});
// DELETE
$('#techniqueSoftDelete').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var action = button.data('action');
    var technique = button.data('technique');
    var modal = $(this);
    modal.find("#softDeleteForm").attr('action', action);
    modal.find('#techniqueName').text(technique.name);
});

