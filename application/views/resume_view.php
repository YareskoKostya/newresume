<h2 style="position: relative; left: 70px">User's resume</h2>
<table style="position: relative; left: 50px" cellpadding="7" border="2">
    <?php
    while ($dataresume = $data->fetch()) {
        ?>
        <tr>
            <td>
                name
            </td>
            <td>
                <?php
                echo $dataresume['name'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                surname
            </td>
            <td>
                <?php
                echo $dataresume['surname'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                birthdate
            </td>
            <td>
                <?php
                echo $dataresume['birthdate'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                country
            </td>
            <td>
                <?php
                echo $dataresume['country'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                tel
            </td>
            <td>
                <?php
                echo $dataresume['tel'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                email
            </td>
            <td>
                <?php
                echo $dataresume['email'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                address
            </td>
            <td>
                <?php
                echo $dataresume['address'];
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                Education
            </td>
        </tr>
        <tr>
            <td>
                Date of begin training:
            </td>
            <td>
                <?php
                echo $dataresume['datebeginstudy0'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Date of end training:
            </td>
            <td>
                <?php
                echo $dataresume['dateendstudy0'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Name of the institution:
            </td>
            <td>
                <?php
                echo $dataresume['studyname0'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Specialty:
            </td>
            <td>
                <?php
                echo $dataresume['professionstudy0'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Rank:
            </td>
            <td>
                <?php
                echo $dataresume['doctor0'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['datebeginstudy1'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of begin training:
            </td>
            <td>
                <?php
                echo $dataresume['datebeginstudy1'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['dateendstudy1'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of end training:
            </td>
            <td>
                <?php
                echo $dataresume['dateendstudy1'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['studyname1'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Name of the institution:
            </td>
            <td>
                <?php
                echo $dataresume['studyname1'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['professionstudy1'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Specialty:
            </td>
            <td>
                <?php
                echo $dataresume['professionstudy1'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['doctor1'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Rank:
            </td>
            <td>
                <?php
                echo $dataresume['doctor1'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['datebeginstudy2'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of begin training:
            </td>
            <td>
                <?php
                echo $dataresume['datebeginstudy2'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['dateendstudy2'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of end training:
            </td>
            <td>
                <?php
                echo $dataresume['dateendstudy2'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['studyname2'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Name of the institution:
            </td>
            <td>
                <?php
                echo $dataresume['studyname2'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['professionstudy2'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Specialty:
            </td>
            <td>
                <?php
                echo $dataresume['professionstudy2'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['doctor2'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Rank:
            </td>
            <td>
                <?php
                echo $dataresume['doctor2'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['datebeginstudy3'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of begin training:
            </td>
            <td>
                <?php
                echo $dataresume['datebeginstudy3'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['dateendstudy3'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of end training:
            </td>
            <td>
                <?php
                echo $dataresume['dateendstudy3'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['studyname3'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Name of the institution:
            </td>
            <td>
                <?php
                echo $dataresume['studyname3'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['professionstudy3'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Specialty:
            </td>
            <td>
                <?php
                echo $dataresume['professionstudy3'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['doctor3'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Rank:
            </td>
            <td>
                <?php
                echo $dataresume['doctor3'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['datebeginstudy4'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of begin training:
            </td>
            <td>
                <?php
                echo $dataresume['datebeginstudy4'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['dateendstudy4'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of end training:
            </td>
            <td>
                <?php
                echo $dataresume['dateendstudy4'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['studyname4'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Name of the institution:
            </td>
            <td>
                <?php
                echo $dataresume['studyname4'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['professionstudy4'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Specialty:
            </td>
            <td>
                <?php
                echo $dataresume['professionstudy4'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['doctor4'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Rank:
            </td>
            <td>
                <?php
                echo $dataresume['doctor4'];
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                Work
            </td>
        </tr>
        <tr>
            <td>
                Date of begin work:
            </td>
            <td>
                <?php
                echo $dataresume['datebeginwork0'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Date of end work:
            </td>
            <td>
                <?php
                echo $dataresume['dateendwork0'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Name of the company:
            </td>
            <td>
                <?php
                echo $dataresume['workname0'];
                ?>
            </td>
        </tr>
        <tr>
            <td>
                Specialty:
            </td>
            <td>
                <?php
                echo $dataresume['professionwork0'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['datebeginwork1'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of begin work:
            </td>
            <td>
                <?php
                echo $dataresume['datebeginwork1'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['dateendwork1'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of end work:
            </td>
            <td>
                <?php
                echo $dataresume['dateendwork1'];
                ?>
            </td>
        </tr>
        <tr  <?php if ($dataresume['workname1'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Name of the company:
            </td>
            <td>
                <?php
                echo $dataresume['workname1'];
                ?>
            </td>
        </tr>
        <tr  <?php if ($dataresume['professionwork1'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Specialty:
            </td>
            <td>
                <?php
                echo $dataresume['professionwork1'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['datebeginwork2'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of begin work:
            </td>
            <td>
                <?php
                echo $dataresume['datebeginwork2'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['dateendwork2'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of end work:
            </td>
            <td>
                <?php
                echo $dataresume['dateendwork2'];
                ?>
            </td>
        </tr>
        <tr  <?php if ($dataresume['workname2'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Name of the company:
            </td>
            <td>
                <?php
                echo $dataresume['workname2'];
                ?>
            </td>
        </tr>
        <tr  <?php if ($dataresume['professionwork2'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Specialty:
            </td>
            <td>
                <?php
                echo $dataresume['professionwork2'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['datebeginwork3'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of begin work:
            </td>
            <td>
                <?php
                echo $dataresume['datebeginwork3'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['dateendwork3'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of end work:
            </td>
            <td>
                <?php
                echo $dataresume['dateendwork3'];
                ?>
            </td>
        </tr>
        <tr  <?php if ($dataresume['workname3'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Name of the company:
            </td>
            <td>
                <?php
                echo $dataresume['workname3'];
                ?>
            </td>
        </tr>
        <tr  <?php if ($dataresume['professionwork3'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Specialty:
            </td>
            <td>
                <?php
                echo $dataresume['professionwork3'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['datebeginwork4'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of begin work:
            </td>
            <td>
                <?php
                echo $dataresume['datebeginwork4'];
                ?>
            </td>
        </tr>
        <tr <?php if ($dataresume['dateendwork4'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Date of end work:
            </td>
            <td>
                <?php
                echo $dataresume['dateendwork4'];
                ?>
            </td>
        </tr>
        <tr  <?php if ($dataresume['workname4'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Name of the company:
            </td>
            <td>
                <?php
                echo $dataresume['workname4'];
                ?>
            </td>
        </tr>
        <tr  <?php if ($dataresume['professionwork4'] == NULL) { ?> hidden="" <?php } ?>>
            <td>
                Specialty:
            </td>
            <td>
                <?php
                echo $dataresume['professionwork4'];
                ?>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
            </td>
        </tr>
        <tr>
            <td>
                interests
            </td>
            <td>
                <?php
                echo $dataresume['interests'];
                ?>
            </td>
        </tr>
        <?php
    }
    ?>
</table>