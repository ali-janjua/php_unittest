### TeHelper.php

Logic seems bit wrong in willExpireAt function. If the difference <= 90 it ignores other cases (line 53 to line 55). So other cases are useless.


### UserRepository.php

