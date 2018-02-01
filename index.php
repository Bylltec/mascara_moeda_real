<?php

echo $_REQUEST['valor'];

?>

<form action="index.php" method="post">
<input type="text" class="block fleft" placeholder="de" name="valor" data-mask="#.##0,00" data-mask-reverse="true" data-mask-maxlength="false"/>

<button type="submit" name="button">Botao</button>
</form>




<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js"></script>
<noscript><div style="display:inline;"><img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/979748429/?guid=ON&amp;script=0"/></div></noscript>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>

<script src="mask_mim.js"></script>
