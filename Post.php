<?php
class Post
{
    public $URL;
    public $Description;
    public $Cost;
    public $Date;
    public $Adress;
    public $isTop;
    public $URL_of_page;

    public function __construct($URL, $Description, $Cost, $Date, $Adress, $isTop, $URL_of_page)
    {
        $this->URL = $URL;
        $this->Description = $Description;
        $this->Cost = $Cost;
        $this->Date = $Date;
        $this->Adress = $Adress;
        $this->isTop = $isTop;
        $this->URL_of_page = $URL_of_page;
    }

    public function getPost()
    {
        return
            '
                <table style="background: ghostwhite" align="center" width="31%">
                    <tr>
                        <td rowspan="5"><img align="right" width="150px" height="150px" alt="img" src="'.$this->URL.'"</td>
                        <td style="background: lightgoldenrodyellow">'.$this->Description.'</td>
                    </tr>
                    <tr>
                        <td style="background: lightgoldenrodyellow">' . $this->Cost. '</td>
                    </tr>
                    <tr>
                        <td style="background: lightgoldenrodyellow">' . $this->Date. '</td>
                    </tr>
                    <tr>
                        <td style="background: lightgoldenrodyellow">' . $this->Adress. '</td>
                    </tr>
                    <tr>
                        <td style="background: lightgoldenrodyellow">' .$this->isTop. '</td>
                    </tr>
                    <tr>
                        <td><a href=' . $this->URL_of_page . '><button>Buy!</button></a></td>
                    </tr>
                </table>
            ';
    }
}
?>