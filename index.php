<!DOCTYPE html>
<?php echo "Hello" ?>

<?php echo "Hello" ?>

<?php echo "Hello" ?>

<?php echo "Hello" ?> 

<h1>line under me<h1>
<!--Lets Make Some Code -->
<?php


//C:\\php-7.4.20-nts-Win32-vc15-x64//C:\\php-7.4.20-nts-Win32-vc15-x64
//(3)Text multiplier now creation of de POINT HELPER 3x size mb used anywhere
function textMultiplier($anyText, $repeatTimes)
{
    $annieText = $anyText." ";
    
    while($repeatTimes > 0)
    {
        $annieText .= $anyText." ";
        $repeatTimes--;
    }

                                                                                $annieText;
}


//() code with de path saved in de proforintaciya



//(2)Modification for de Bitrix Sites, possible 
//idea to split all de words and do de new " " bug try to solve
//3rd usage to not read de comments about de code firstly myself HMM
//Thinkings Damirs brain power like de memory mb increase
function deleteTooMuchSpacesAndStaffSlashS($deleteSpacesText)
{
    
    $array = [1, "3"=> true];
    //A bit longer timebreak right now
    

    return preg_replace("/\)\-\)/", "Time break time break Time break time break Time break time break time break time break time break Time break time break time break time break time break Time break time break  ", $deleteSpacesText);
    //return preg_replace("/\^\/\/w\*\r\$/", "", $deleteSpacesText);
    
    //Normal amount of de breaks may be a big huge!!!
    //Time break time break Time break time break Time break time break time break time break time break Time break time break time break time break time break Time break time break time break time break time break Time break time break time break time break time break Time break time break time break 

    //return preg_replace("/[А-Яа-я]/", "", $deleteSpacesText);
    //return preg_replace("/\^\/\/w\*\r\$/", "", $deleteSpacesText);
    //Погружение в «ретро» продолжалось. В одном из залов нашего дома была организована ещё одна выставка – сотрудники и  наши друзья  знакомили ребят с фотоаппаратами и кинокамерами, радиоприёмниками, магнитофонами старых моделей, проигрывателями и пластинками. Особый восторг вызвала демонстрация работы уникального фильмоскопа (диапроектора) и диафильмов, а самым удивительным для всех экспонатом нашего «домашнего» погружения стал ещё довоенный патефон.
}
function deleteTooMuchSpacesAndStaffSlashSCopy($deleteSpacesText)
{
    
    $array = [1, "3"=> true];
    //A bit longer timebreak right now
    

    return preg_replace("/\)\+\)/", "Time break time break Time break time break Time break time break time break time break time break Time break time break time break time break time break Time break time break  ", $deleteSpacesText);
    //return preg_replace("/\^\/\/w\*\r\$/", "", $deleteSpacesText);
    
    //Normal amount of de breaks may be a big huge!!!
    //Time break time break Time break time break Time break time break time break time break time break Time break time break time break time break time break Time break time break time break time break time break Time break time break time break time break time break Time break time break time break 

    //return preg_replace("/[А-Яа-я]/", "", $deleteSpacesText);
    //return preg_replace("/\^\/\/w\*\r\$/", "", $deleteSpacesText);
    //Погружение в «ретро» продолжалось. В одном из залов нашего дома была организована ещё одна выставка – сотрудники и  наши друзья  знакомили ребят с фотоаппаратами и кинокамерами, радиоприёмниками, магнитофонами старых моделей, проигрывателями и пластинками. Особый восторг вызвала демонстрация работы уникального фильмоскопа (диапроектора) и диафильмов, а самым удивительным для всех экспонатом нашего «домашнего» погружения стал ещё довоенный патефон.
}

function changeFileInside($fileName1, $fileName2, $fileName3)
{
    $file1 = fopen($fileName1, "r");
    $file2 = fopen($fileName2, "a+");
    $file3 = fopen($fileName3, "a+");

    while(! feof($file1)) {
      
     fwrite($file2, deleteTooMuchSpacesAndStaffSlashS(fgets($file1)));

     echo "it is going on";
      
    }

    fclose($file2);
    $file2 = fopen($fileName2, "a+");

    while(! feof($file2)) {

        echo "it is going on2222";
      
        fwrite($file3, deleteTooMuchSpacesAndStaffSlashSCopy(fgets($file2)));
         
       }

    fclose($file1);
    fclose($file2);
    fclose($file3);

       /*
    $file3 = fopen($fileName2, "r");

    while(! feof($file3)) {
      
        echo fgets($file3);
         
       }

    fclose($file3);
*/
}


//echo deleteTooMuchSpacesAndStaffSlashS("Okey 	Not Okey		Okey	 2");

//(2)
changeFileInside("NotesPalace/text1.txt","NotesPalace/text2.txt","NotesPalace/text3.txt" );

textMultiplier("TimeBreak", 17)



?>

<h1>line above me<h1>

<head></head>
<body>

<p><h1>Dat is okey</h1></p>

</body>
<scripts></scripts>
</html>


