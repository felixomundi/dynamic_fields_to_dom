// $(document).ready(function () {
//     $("#add-new-inputs").on("click", function (e) {
//         e.preventDefault();
//         var count = $("#count").val();
//         count++;
//         $("#show-item").prepend(` <div class="row">
//         <div class="col-md-4 mb-3">
//             <label for="name">name</label>
//             <input type="text" name="name[]" required id="name" class="form-control bg-light">
//         </div>
//         <div class="col-md-3 mb-3">
//             <label for="name">name</label>
//             <input type="text" name="name[]" required id="name" class="form-control bg-light">
//         </div>
//         <div class="col-md-3 mb-3">
//             <label for="name">name</label>
//             <input type="text" name="name[]" required id="name" class="form-control bg-light">
//         </div>
//         <div class="col-md-2 mb-3 d-grid">
//             <button type="button"  class="btn btn-sm btn-danger remove-old-inputs"><i class="fa fa-trash"></i> Remove</button>
//         </div>
//     </div>`)
//     });

// })

$(document).ready(function () {
var i = 1;
$("#add-new-inputs").on("click", function (e) {
    i++;
    e.preventDefault()
    $("#show-item").append(` <div class="row" id="row3${i}" >
    <div class="col-md-4 mb-3">
        <label for="name">name</label>
        <input type="text" name="name[]" required id="name" class="form-control bg-light">
    </div>
    <div class="col-md-3 mb-3">
        <label for="name">name</label>
        <input type="text" name="name[]" required id="name" class="form-control bg-light">
    </div>
    <div class="col-md-3 mb-3">
        <label for="name">name</label>
        <input type="text" name="name[]" required id="name" class="form-control bg-light">
    </div>
    <div class="col-md-2 mb-3 d-grid">
        <button type="button"  class="btn btn-sm btn-danger remove-old-inputs" id="${i}"><i class="fa fa-trash"></i> Remove</button>
    </div>
</div>`)
});

$(document).on('click', '.remove-old-inputs', function () {
var button_id = $(this).attr("id");       
$('#row3' + button_id + '').remove();        
});
})