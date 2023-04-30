'use strict';

const tableName = '#sparePartsTable';
$(tableName).DataTable({
    scrollX: true,
    deferRender: true,
    scroller: true,
    processing: true,
    serverSide: false,
    'order': [[0, 'asc']],
    ajax: {
        url: "/get-spare-parts",
    },
    columnDefs: [
        {
            'targets': [4],
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
            data: 'part_number',
            name: 'part_number'
        },{
            data: 'type',
            name: 'type'
        },{
            data: 'vehicle',
            name: 'vehicle'
        },
        {
            data: function (row) {
                let url = recordsURL + row.id;
                let data = [
                {
                    'id': row.id,
                    'url': url + '/edit',
                }];
                                
                return prepareTemplateRender('#sparePartsTemplate',
                    data);
            }, name: 'id',
        },
    ],
});

$(document).on('click', '.delete-btn', function (event) {
    const recordId = $(event.currentTarget).data('id');
    deleteItem(recordsURL + recordId, tableName, 'Spare Part');
});
