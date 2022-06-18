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
    modal.find('#full_name').val(artist.full_name);
    modal.find('#artistic_name').val(artist.artistic_name);
    modal.find('#email').val(artist.email);
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
| CATEGORY MODALS
|---------------------------------------------------------------------------
*/
// EDIT
$('#categoryEdit').on('show.bs.modal', function (event) {
	var button = $(event.relatedTarget);
	var action = button.data('action');
	var category = button.data('category');
	var modal = $(this);
	modal.find('#name').val(category.name);
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
    modal.find('#name').val(serie.name);
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
| TECHNIQUE MODALS
|---------------------------------------------------------------------------
*/
// EDIT
$('#techniqueEdit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var action = button.data('action');
    var technique = button.data('technique');
    var modal = $(this);
    modal.find('#name').val(technique.name);
    modal.find('#acronym').val(technique.acronym);
    modal.find('#status').val(technique.status);
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


/* 
|---------------------------------------------------------------------------
| WORK MODALS
|---------------------------------------------------------------------------
*/
// EDIT
$('#workEdit').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var action = button.data('action');
    var technique = button.data('work');
    var modal = $(this);
    modal.find('#title').val(technique.title);
    modal.find('#width').val(technique.width);
    modal.find('#height').val(technique.height);
    modal.find('#year').val(technique.year);
    modal.find('#produced').val(technique.produced);
    modal.find('#edition').val(technique.edition);
    modal.find('#price').val(technique.price);
    modal.find('#status').val(technique.status);
    modal.find('#serie_id').val(technique.serie_id);
    modal.find('#technique_id').val(technique.technique_id);
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

