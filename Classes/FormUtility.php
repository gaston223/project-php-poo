<?php
 /*
Class FormUtility de :
- Generer le HTML du formulaire
- Effectuer des controles sur les variables POST
*/

class FormUtility
{
    /*
    
    */
    public function generateHTML($label): string
    {
        return  <<<EOT
<div class="form-group">
    <label for="name">$label</label>
    <input name="name" type="text" class="form-control"/>
    
</div>


EOT;
    }
}
