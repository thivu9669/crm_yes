$(function() {
	let isConfirm = $('#contracts_form').data('confirm')
	let $selectTo = $('#select_to'),
		$selectRep = $('#select_rep')

    $('#contracts_form').validate({
        submitHandler: isConfirm ? function(form, e) {
            window.blockPage()
            e.preventDefault()

            $(form).confirmation(result => {
                if (result && (typeof result === 'object' && result.value)) {
                    $(form).submitForm().then(() => {
                        location.href = route('contracts.index')
                    })
                } else {
                    window.unblock()
                }
            })
        } : false,
    })

	$selectTo.select2Ajax({
		url: route('users.list'),
		data: function(q) {
			q.roleId = 8
		},
		column: 'username',
	})
	$selectRep.select2Ajax({
		url: route('users.list'),
		data: function(q) {
			q.roleId = 9
		},
		column: 'username',
	})
})