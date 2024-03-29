'use strict';

const tableName = '#employeesTable';
$(tableName).DataTable({
    scrollX: true,
    deferRender: true,
    scroller: true,
    processing: true,
    serverSide: true,
    'order': [[0, 'asc']],
    ajax: {
        url: recordsURL,
    },
    columnDefs: [
        {
            'targets': [7],
            'orderable': false,
            'className': 'text-center',
            'width': '8%',
        },
    ],
    columns: [
        {
            data: 'name',
            name: 'name'
        },{
            data: 'email',
            name: 'email'
        },{
            data: 'password',
            name: 'password'
        },{
            data: 'address',
            name: 'address'
        },{
            data: 'phone_number',
            name: 'phone_number'
        },{
            data: 'role',
            name: 'role'
        },{
            data: 'remember_token',
            name: 'remember_token'
        },
        {
            data: function (row) {
                let url = recordsURL + row.id;
                let data = [
                {
                    'id': row.id,
                    'url': url + '/edit',
                }];
                                
                return prepareTemplateRender('#employeesTemplate',
                    data);
            }, name: 'id',
        },
    ],
});

$(document).on('click', '.delete-btn', function (event) {
    const recordId = $(event.currentTarget).data('id');
    deleteItem(recordsURL + recordId, tableName, 'Employee');
});
