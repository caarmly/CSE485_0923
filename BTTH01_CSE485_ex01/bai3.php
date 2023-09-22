<style>
        table {
            border-collapse: collapse; 
            border: 2px solid black;
        }

        thead, td{
            border: 2px solid black; 
        }
    </style>
<?php 

    echo '<p style = "color: red">Bài tập số 3 </p>';

    $arrs = ['PHP', 'HTML', 'CSS', 'JS'];

    echo '<table border ="1">
        <thead>
            <tr>
                <th><b>Tên khóa học</th>
            </tr>
        </thead>

        <tbody>';
            foreach ($arrs as $key => $languages) {
                echo '<tr>';
                    echo '<td>' . $languages . '</td>';
                echo '</tr>';
            }

     echo   '</tbody>
    </table>';
?>