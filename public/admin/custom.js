
// Defaults sweet alert js
var swalInit = swal.mixin({
    buttonsStyling: false,
    customClass: {
        confirmButton: "btn btn-primary",
        cancelButton: "btn btn-light",
        denyButton: "btn btn-light",
        input: "form-control",
    },
});
// --------------------------------

// Delete action with reload page
$(document).on('click', '.delete', function (e) {
    e.preventDefault();

    var deleteUrl = $(this).attr('href');

    swalInit.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Yes, delete it!',
        cancelButtonText: 'No, cancel!',
        buttonsStyling: false,
        customClass: {
            confirmButton: 'btn btn-danger',
            cancelButton: 'btn btn-success'
        }
    }).then(function (result) {
        if (result.isConfirmed) {
            $.ajax({
                url: deleteUrl,
                type: 'DELETE',
                headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
                success: function (data) {
                    swalInit.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    ).then(function () {
                        location.reload();
                    });
                },
                error: function (xhr, status, error) {
                    swalInit.fire(
                        'Error Occurred!',
                        error,
                        'error'
                    );
                }
            });
        }
        else if (result.dismiss === swal.DismissReason.cancel) {
            swalInit.fire(
                'Cancelled',
                'Your imaginary file is safe :)',
                'error'
            );
        }
    });
});
// --------------------------------