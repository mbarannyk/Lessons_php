
<?php
$conn = mysqli_connect("localhost", "root", "root", "Films");
$query = "select Actors.id, Actors.name, Actors.surname, Actors.age, Films.name as f_name, Films.release_date, Directors.name as d_name, Directors.surname as d_surname, Directors.is_famous from Actors join Films on Actors.id_film = Films.id join Directors on Films.id_director = Directors.id";
$result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_array($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $surname = $row['surname'];
        $age = $row['age'];
        $fname = $row['f_name'];
        $date = $row['release_date'];
        $dname = $row['d_name'];
        $dsurname = $row['d_surname'];
        if ($row['is_famous'] == TRUE) {
                $famous = '  (director is famous);';
            } else {
                $famous = '  (director is unknown);';
            }
         
        print($id . ". Actor: " . $name . " " . $surname . "   Age:  " . $age . "   Film:  " . $fname . "   Release date:  " . $date . "   Director:  " . $dname . " " . $dsurname . $famous . " \n");
    }

mysqli_free_result($result);
mysqli_close($conn);