$(function() {
	let isConfirm = $('#contracts_form').data('confirm')

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

	$('#select_province').select2Ajax({
		data(q) {
			q.provinceIds = [24, 28, 30]
		}
	})

	$('#select_payment_method').on('change', function() {
		if ($(this).val() !== '') {
			$('#select_bank').prop('disabled', false).empty().trigger('change');
			axios.get(route('payment_costs.get_bank'), {
				params: {
					method: $(this).val()
				},
			}).then(result => {
				let items = result['data']['items']

				for (const item of items) {
					let option = new Option(item.bank_name, item.cost, false, false);
					$('#select_bank').append(option).trigger('change');
				}
			}).catch(e => console.log(e)).finally(() => {
				window.unblock()
			})
		} else {
			$('#select_bank').prop('disabled', true)
		}
	})

	$('#select_bank').on('change', function() {
		if ($(this).val() !== '') {
			$('#txt_cost').val($(this).val())
		} else {
			$('#txt_cost').val('')
		}
	})
})