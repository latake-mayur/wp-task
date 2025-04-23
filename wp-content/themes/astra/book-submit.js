jQuery(document).ready(function ($) {
    $('#bookSubmissionForm').on('submit', function (e) {
        e.preventDefault();

        var formData = new FormData(this);
        formData.append('action', 'submit_book');
        formData.append('nonce', book_submit.nonce);

        $.ajax({
            url: book_submit.ajax_url,
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function (res) {
                $('#book-submission-response').text(res.data.message);
                $('#bookSubmissionForm')[0].reset();
            },
            error: function () {
                $('#book-submission-response').text('Something went wrong.');
            },
        });
    });
});
