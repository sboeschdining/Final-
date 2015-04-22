<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<!DOCTYPE HTML>
<html lang="en">
    <?php
    include ("top.php");
    ?>
    <body>

        <p><h1><b><center><font face="Calisto MT">Coach Belfield</center></b></h1></font></p> 
    <img src="belfield.png" alt="belfield"/>

    <p>Matt Belfield begins his 11th season at the helm of the University of Vermont men's and 
        women's cross country programs in 2013. He is also the head men's and women's track and 
        field coach at Vermont.</p>

    <p>Belfield led the women's team to a third place finish at the 2012 America East Championships 
        in Durham, N.H. Kirsten Weberg (third) and Yolanda Ngarambe (eighth) each earned all-conference 
        honors, while rookie Alicia Clark missed a top-10 finish by just half a second as she placed 11th. 
        The women went on the finish 12th at the NCAA Northeast Regional.</p>

    <p>On the men's side, Ethan McBrien was all-conference for the Catamounts in the 8K event as he earned eighth
        place overall. Weberg and McBrien were each named to the America East All-Academic Team after the season, 
        and both teams were awarded USTFCCCA Division I All-Academic status. Weberg was also named to the 2013 Capital
        One Academic All-District Team for District One.</p>

    <p>At the 2011 America East Championships, Morgan Powers and Aaron Szotka each finished seventh overall to earn all-conference
        honors. Powers went on to place 21st at the 2011 NCAA East Regional and garnered an NCAA All-Region award. Belfield led 
        the Catamount women's team to fourth place in the conference and 13th place at NCAA regional meet.</p>

    <p>After the season, five members of the men's and women's cross country teams were named to the 2011 America East All-Academic
        Team. Both teams were also awarded USTFCCCA Division I All-Academic status as the women posted a combined 3.39 GPA, while the
        men registered a 3.07 mark. Powers was also named to the 2011 Division I All-Academic team with a near-perfect 3.97 GPA.</p>

    <p>In 2008, both the men's and women's cross country teams each won three team titles during the regular season. Men's MVP Doug Maisey 
        won twice, including the season opening race at the McGill Open Invitational, and was UVM's top runner in all six of his races. At 
        the New England Cross Country Championships, Maisey was the first America East runner across the finish line. His eighth-place finish 
        was the first top-10 performance at the New England Championships by a Catamount since 1996. He also led Vermont at the America East 
        Championships, finishing 10th overall to earn all-conference honors.</p>

    <p>In 2006, Belfield led both the men's and women's teams to their best finish at the America East Championship race in four years. The
        men placed fifth out of nine schools, while the women were fourth. The men's team also posted impressive numbers in the classroom with
        a 3.36 GPA, which was tops among men's cross country teams in America East.</p>

    <p>Belfield came to UVM from Ithaca College, where he was a five-time New York State Collegiate Track Conference (NYSCTC) Coach of the Year 
        and led the Bombers to three straight conference outdoor track and field titles. During his three-year head coaching tenure at Ithaca,
        Belfield's student-athletes brok 14 school records and recorded 11 All-America performances.</p>

    <p>Prior to arriving at Ithaca, Belfield was head coach of the men's and women's cross country and track and field teams at the University 
        of the Redlands in Redlands, Calif. At Redlands, Belfield coached a national champion hammer-thrower and a two-time national champion high 
        jumper. Belfield served as an assistant track and field coach at Redlands for three years prior to being named head coach in June of 1995.
        He has also worked on the coaching staffs at Colgate University and Catholic University.</p>

    <p>A graduate of Catholic University, Belfield was a six-time all-conference high jumper during his undergraduate career. He earned his master's 
        degree in education, with an emphasis in counseling, from Redlands in 1994.</p>

    <p>Under Belfield's guidance, UVM student-athletes on the cross country and track and field teams have garnered 87 America East All-Academic citations. 
        In 2006-07, the Catamounts won the America East Academic Cup for the third straight year and fourth time overall, and the men's cross country team 
        had the highest GPA among America East teams with a 3.36 team GPA. The women's cross country team posted a 3.52 team GPA, the highest of any of the 
        175 conference teams in America East in 2004-05. The Vermont men's track and field team was the America East leader in that sport with a team GPA
        of 3.05 in 2004-05.</p>
</body>

<?php
$filename = "tabledata.csv";

$file = fopen($filename, "r");

$headers = fgetcsv($file);

while (!feof($file)) {
    $records[] = fgetcsv($file);
}


print "<table>\n";
print "<tr>\n";
foreach ($headers as $header) {
    print "<th>$header</th>";
}

print "<tr>\n";
foreach ($records as $row) {
    print "<tr>\n";
    foreach ($row as $cell) {
        print"       <td>$cell</td>\n";
    }
    print"</tr>\n";
}

print "</tables>\n";
?>
