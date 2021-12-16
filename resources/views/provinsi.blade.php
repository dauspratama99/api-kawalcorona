<x-app-layout title="Data Indonesia">
    <h4>Kawal Corona API</h4>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>
                                    Data
                                </th>
                                <th>Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="js">
        <script>
            $(document).ready(() => {
                $.post("/provinsi", {_token : "{{ csrf_token() }}"}, (result) => {
                    
                    let row = "";
                    result.forEach(provinsi => {
                        row += "<tr>"
                            row += '<td class="text-center">'+provinsi.attributes['Provinsi']+'</td><td><ul>';
                            row += `<li class='text-center'>Positif => ${provinsi.attributes['Kasus_Posi']}</li>`
                            row += `<li>Sembuh => ${provinsi.attributes['Kasus_Semb']}</li>`
                            row += `<li>Meninggal => ${provinsi.attributes['Kasus_Meni']}</li>`
                            row += '</ul></td>'
                        row += "</tr>";
                    });


                    $('tbody').html(row);
                })
            })
        </script>
    </x-slot>
</x-app-layout>