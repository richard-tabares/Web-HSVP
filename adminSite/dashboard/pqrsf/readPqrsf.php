<!-- mensage de informacion -->
<div class="msgInfo grid grid-row-3">
    <div class="row-span-1"><i class="fa-solid fa-circle-info fa-3x mb-5"></i></div>
    <div class="row-span-1"><span class="msg row-span-1"></span></div>
    <div class="row-span-1"><input class="btn-second row-span-1 mt-5" id="cerrarMsg" type="button" value="Cerrar" onClick="cerrarMsg()"></div>
</div>
<!-- div contenedor de la PQRSF -->
<div class="mx-auto w-full h-auto bg-white rounded-lg shadow text-gray-600 p-5 pb-10">
    <!-- titulo noticia -->
    <div class="text-2xl font-bold text-center mb-10 mt-10" id="title"></div>
    <!-- seccion para leer la PQRSF -->
    <div class="mx-auto">
        <div class="text-lg font-bold mb-5">Datos de la PQRSF</div>
        <table class="mb-10">
            <tr>
                <th class="text-left">Radicado:</th>
                <td id="radicado"></td>
            </tr>
            <tr>
                <th class="text-left">Estado:</th>
                <td><span class="noSolve" id="estado"></span></td>
            </tr>
            <tr>
                <th class="text-left">Tipo de Proceso:</th>
                <td id="tipoProceso"></td>
            </tr>
            <tr>
                <th class="text-left">Dirigido a:</th>
                <td id="area"></td>
            </tr>
            <tr>
                <th class="text-left">Alcance:</th>
                <td id="alcance">A un funcionario en especifico</td>
            </tr>
            <tr>
                <th class="text-left">Descripción:</th>
                <td class="text-justify" id="descripcion">
                    El pasado Jueves 12 de Agosto de 2021, tres funcionarios de la empresa CONSULCONS LTDA, se acercaron al hospital a realizar prueba de para diagnóstico de la infección respiratoria por COVID 19 (SARS CoV-2)- Antígeno. Al final de la tarde de este mismo día, una funcionaria de la Secretaría de Salud del municipio (Marcela Muriel) llegó a los hoteles donde el personal se estaba hospedando, impartiendo indicaciones y lineamientos sobre las medidas de bioseguridad que se debían tomar y activar protocolo de bioseguridad, argumentando que una de las tres personas empleadas por la empresa Consulcons, le había salido el resultado positivo de la prueba y amenaza en iniciar un proceso disciplinario y sancionatorio en contra de los funcionarios y empresa por el desacato de las recomendaciones impartidas. Ante la situación el profesional SST de la empresa se comunicó con los trabajadores para que se cumplieran la indicaciones y recomendaciones de la funcionaria, pero ante la situación, la empresa decide tomar una nueva prueba a fin de corroborar el resultado, debido a que el funcionario no presenta sintomatología y ha seguido muy al margen las medidas de bioseguridad.
                    El Domingo 15 de Agosto de 2021, el número de celular del funcionario de la empresa Luis Dario Sehuanes Betin, identificado con CC. 78106923, le llega el mensaje de texto con indicaciones para descargar resultados de la prueba tomada, siendo así que el resultado es Negativo. La situación presentada de la falsa información, causó una pérdida en tiempo, recursos y mala imagen de la empresa, ya que se dejó de trabajar por 4 días, e incumplimientos con el cliente y con la comunidad.
                    Agradezco por favor tomar las acciones que consideren pertinentes para que esta situación no se vuelva a presentar y se sean afectadas las empresas
                </td>
            </tr>
        </table>
        <div class="text-lg font-bold mb-5">Datos de Contacto</div>
        <table class="mb-10">
        <tr>
            <th class="text-left">Apellidos:</th>
            <td id="apellidos"></td>
        </tr>
        <tr>
            <th class="text-left">Nombres:</th>
            <td id="nombres"></td>
        </tr>
        <tr>
            <th class="text-left">Tipo Documento:</th>
            <td id="tipoDocumento"></td>
        </tr>
        <tr>
            <th class="text-left">Número Documento:</th>
            <td id="numeroDocumento"></td>
        </tr>
        <tr>
            <th class="text-left">Teléfono:</th>
            <td id="telefono"></td>
        </tr>
        <tr>
            <th class="text-left">Correo:</th>
            <td id="correo"></td>
        </tr>
        <tr>
            <th class="text-left">Genero:</th>
            <td id="sexo"></td>
        </tr>
        <tr>
            <th class="text-left">Dirección:</th>
            <td id="direccion"></td>
        </tr>
        <tr>
            <th class="text-left">Barrio:</th>
            <td id="barrio"></td>
        </tr>
        <tr>
            <th class="text-left">Departamento:</th>
            <td id="departamento"></td>
        </tr>
        <tr>
            <th class="text-left">EPS:</th>
            <td id="eps"></td>
        </tr>

        </table>
        <span id="idpqrsf" data-keyPqrsf="" class="btn-primary" onClick="solvePqrsf(event)"><i class="fa-solid fa-circle-check text-primary fa-lg pr-2"></i>Resuelta</span>
    </div>
</div>