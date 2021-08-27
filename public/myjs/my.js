    $(document).ready(function() {


            $('.delete-category').click(function () {
                if (confirm('are you sure?')) {
                    let idCategory = $(this).attr('data-id');
                    let origin = location.origin
                    $.ajax({
                        url: origin + '/admin/categories/' + idCategory + '/destroy',
                        method: 'GET',
                        type: 'json',
                        success: function (res) {
                            $('#category-' + idCategory).remove();
                        },
                        error: function (error) {

                        }
                    })
                }
            })

            $('.delete-company').click(function (){
                if (confirm('are you sure?')){
                    let idCompany = $(this).attr('data-id');
                    let origin = location.origin;
                    $.ajax({
                        url:origin + '/admin/companies/' + idCompany + '/destroy',
                        method: 'GET',
                        type: 'json',
                        success:function (res){
                            $('#company-' + idCompany).remove();
                        },
                        error:function (error){

                        }
                    })
                }
            })

            $('.delete-user').click(function (){
                if (confirm('are you sure')){
                    let idUser = $(this).attr('data-id');
                    let origin = location.origin;
                    $.ajax({
                        url:origin + '/admin/users' + idUser + '/destroy',
                        method: 'GET',
                        type: 'json',
                        success:function (res){
                            $('#user-' + idUser).remove();
                        },
                        error:function (error){

                        }
                    })

                }
            })

        });
