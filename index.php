<?php

    $color = '#'.substr(md5(time()), 0, 6);

    echo "<html><body style = 'background: $color'>Prova 123</body></html>";