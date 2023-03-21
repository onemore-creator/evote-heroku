<?php
/**
 * This is the lookup table used to give the user the correct
 * translation. English strings are keys in the array, and point
 * to arrays themselves were language codes are keys. English is NOT
 * stored in these arrays, since that would mean they are stored twice.
 * 
 * Strings must contain zero heading och leading whitespace
 * 
 * Example with three languages
 * 
 * array(
 * "Example text"=> array(
 *      "sv"=>"Exempeltext",
 *      "de"=>"Beispieltext",   // All items must have trailing ,
 *  ),
 * )
 * 
 * To add localization for your language, simply add translations
 * in this file, add the case in getLocalizedText.php and add
 * language option in index.php
 * 
 * Add text under the correct comment (first time it appears in a file)
 * 
 * CHANGING ENGLISH TEXT REQUIRES CHANGE IN SOURCE FILES AS WELL
 */
define("LOCALIZED_TEXT_LOOKUP_TABLE", array(
    // index.php
    "E-vote - Your digital voting system"=>array(
        "sv"=>"Избирком ФМОПИ",
        "scanian"=>"Избирком ФМОПИ",
    ),
    "Voting page"=>array(
        "sv"=>"Голосование",
        "scanian"=>"Голосование",
    ),
    "Log in"=>array(
        "sv"=>"Войти",
        "scanian"=>"Войти",
    ),
    "Log out"=>array(
        "sv"=>"Выйти",
        "scanian"=>"Выйти",
    ),
    "Election admin"=>array(
        "sv"=>"Администратор выборов",
        "scanian"=>"Администратор выборов'",
    ),
    "Adjuster"=>array(
        "sv"=>"Наблюдатель",
        "scanian"=>"Наблюдатель"
    ),
    "Manage users"=>array(
        "sv"=>"Редактировать пользователей",
        "scanian"=>"Редактировать пользователей",
    ),
    "Administrator"=>array(
        "sv"=>"Администратор",
        "scanian"=>"Администратор",
    ),
    "E-vote must be configured"=>array(
        "sv"=>"E-vote должно быть настроено",
        "scanian"=>"E-vote должно быть настроено",
    ),
    // Footer
    "Created by Informationsutskottet at E-sektionen at TLTH"=>array(
        "sv"=>"Создано Informationsutskottet at E-sektionen at TLTH",
        "scanian"=>"Создано Informationsutskottet at E-sektionen at TLTH",
    ),
    "E-vote is open and free software licensed under MPL-2.0. Source code can be found at"=>array(
        "sv"=>"E-vote является открытым и бесплатным программным обеспечением под лицензией MPL-2.0. Исходный код можно найти на",
        "scanian"=>"E-vote является открытым и бесплатным программным обеспечением под лицензией MPL-2.0. Исходный код можно найти на'",
    ),
    // install/setup.php
    "E-vote Setup"=>array(
        "sv"=>"E-vote Setup",
        "scanian"=>"E-vote Setaup",
    ),
    "Configuration successfull!"=>array(
        "sv"=>"Настройка прошла успешно!",
        "scanian"=>"Настройка прошла успешно!",
    ),
    "An user with that name already exists in the database."=>array(
        "sv"=>"Пользователь с таким ником уже существует.",
        "scanian"=>"Пользователь с таким ником уже существует.",
    ),
    "The passwords for superuser does not match. Try again."=>array(
        "sv"=>"Пароль для суперпользователя не свопадает. Попробуйте снова.",
        "scanian"=>"Пароль для суперпользователя не свопадает. Попробуйте снова.",
    ),
    "All fields not filled in"=>array(
        "sv"=>"Все поля не заполнены",
        "scanian"=>"Все поля не заполнены",
    ),
    // install/setup.php: Actual HTML seen by user
    "Hi! How fun that you want to start using E-vote.\n
    <br>\n
    <br> Fill out the form according to your setup to configure.\n
    <br> Make sure to put in the correct values so they don't have to be changed manually afterwards."=>array(
        "sv"=>"Привет! Как классно, что ты хочешь начать использовать E-vote.\n
        <br>\n
        <br> Заполните форму в соответствии с вашей установкой для конфигурации.\n
        <br> Убедитесь, что вы ввели правильные значения, чтобы потом их не пришлось менять вручную.",
        "scanian"=>"Привет! Как классно, что ты хочешь начать использовать E-vote.\n
        <br>\n
        <br> Заполните форму в соответствии с вашей установкой для конфигурации.\n
        <br> Убедитесь, что вы ввели правильные значения, чтобы потом их не пришлось менять вручную.",
    ),
    "Database configuration"=>array(
        "sv"=>"Конфигурация базы данных",
        "scanian"=>"Конфигурация базы данных",
    ),
    "Host:"=>array(
        "sv"=>"Host:",
        "scanian"=>"Host:",
    ),
    "Database name:"=>array(
        "sv"=>"Имя базы:",
        "scanian"=>"Имя базы:",
    ),
    "User:"=>array(
        "sv"=>"Пользователь:",
        "scanian"=>"Пользователь:",
    ),
    "Password:"=>array(
        "sv"=>"Lösenord:",
        "scanian"=>"Löesenord:",
    ),
    "This is the user that has full control of the system. This user can't be deleted from the database."=>array(
        "sv"=>"Это пользователь, который имеет полный контроль над системой. Этот пользователь не может быть удален из базы данных.",
        "scanian"=>"Это пользователь, который имеет полный контроль над системой. Этот пользователь не может быть удален из базы данных.",
    ),
    "Name:"=>array(
        "sv"=>"Имя:",
        "scanian"=>"Имя:",
    ),
    "Repeat password:"=>array(
        "sv"=>"Повторите пароль:",
        "scanian"=>"Повторите пароль:",
    ),
    "E-vote is configured!"=>array(
        "sv"=>"E-vote настроно!",
        "scanian"=>"E-vote настроно!",
    ),
    // index/clear.php
    "Close current election"=>array(
        "sv"=>"Закрыть текущее голосвание",
        "scanian"=>"Закрыть текущее голосвание",
    ),
    "Your password:"=>array(
        "sv"=>"Ваш пароль:",
        "scanian"=>"Ваш пароль:",
    ),
    "Delete election"=>array(
        "sv"=>"Удалить голосование",
        "scanian"=>"Удалить голсование",
    ),
    // No permission
    "You don't have permission to view this page."=>array(
        "sv"=>"У вас нет доступа к этой странице.",
        "scanian"=>"У вас нет доступа к этой странице.",
    ),
    // install/vote/front.php
    "There is currently no election session."=>array(
        "sv"=>"Сейчас не проходит голосвание.",
        "scanian"=>"Сейчас не проходит голосвание.",
    ),
    "Checking for new election round in"=>array(
        "sv"=>"Проверка на новое голосование через",
        "scanian"=>"Проверка на новое голосование через",
    ),
    "Oops! Could not check for new election round. Try refreshing the page!"=>array(
        "sv"=>"Упс! Не удалось проверить наличие нового тура выборов. Попробуйте обновить страницу!",
        "scanian"=>"Упс! Не удалось проверить наличие нового тура выборов. Попробуйте обновить страницу!",
    ),
    "Refresh Page"=>array(
        "sv"=>"Обновить страницу",
        "scanian"=>"Обновить страницу",
    ),
    "There is nothing to vote on currently. Take a cookie."=>array(
        "sv"=>"В настоящее время голосовать не за что. Возьмите печеньку.",
        "scanian"=>"В настоящее время голосовать не за что. Возьмите печеньку."
    ),
    "Voting in progress"=>array(
        "sv"=>"Идёт голосование",
        "scanian"=>"Идёт голосование",
    ),
    // These two are a bit iffy, since we need to insert a number in the middle.
    // Check the source file for help how to do this properly in your language
    "You can vote on <b>"=>array(
        "sv"=>"Вы можете проголосовать за <b>",
        "scanian"=>"Вы можете проголосовать за <b>",
    ),
    "</b> of the alternatives"=>array(
        "sv"=>"</b> кандидатов либо "Против всех"",
        "scanian"=>"</b> кандидатов либо "Против всех"",
    ),
    // end of iffy things (for now)
    "Personal code:"=>array(
        "sv"=>"Персональный код:",
        "scanian"=>"Персональный код:",
    ),
    "Temporary code:"=>array(
        "sv"=>"Код голосования:",
        "scanian"=>"Код голосования:",
    ),
    "Vote!"=>array(
        "sv"=>"Проголосовать!",
        "scanian"=>"Проголосовать!",
    ),
    // index/useradmin/useradminpanel.php
    "Choose"=>array(
        "sv"=>"Выбрать",
        "scanian"=>"Выбрать",
    ),
    "Name"=>array(
        "sv"=>"Имя",
        "scanian"=>"Имя",
    ),
    "Privileges"=>array(
        "sv"=>"Права",
        "scanian"=>"Права",
    ),
    "Remove selected users"=>array(
        "sv"=>"Убрать выделенных пользователей",
        "scanian"=>"Убрать выделенных пользователей",
    ),
    // index/useradmin/newuser.php
    "Create new user"=>array(
        "sv"=>"Создать нового пользователя",
        "scanian"=>"Создать нового пользователя",
    ),
    "Username:"=>array(
        "sv"=>"Имя пользователя:",
        "scanian"=>"Имя пользователя:",
    ),
    "Privileges:"=>array(
        "sv"=>"Права:",
        "scanian"=>"Права:",
    ),
    // index/useradmin/changepassword.php
    "Change password"=>array(
        "sv"=>"Поменять пароль",
        "scanian"=>"Поменять пароль",
    ),
    "New password:"=>array(
        "sv"=>"Новый пароль:",
        "scanian"=>"Новый пароль:",
    ),
    "Are you sure you want to log out?"=>array(
        "sv"=>"Вы уверены, что хотите выйти из аккаунта?",
        "scanian"=>"Вы уверены, что хотите выйти из аккаунта?",
    ),
    // index/electionadmin/electionadminpanel.php
    "Some shady character has done something with the database."=>array(
        "sv"=>"Какой-то сомнительный персонаж что-то сделал с базой данных",
        "scanian"=>"Какой-то сомнительный персонаж что-то сделал с базой данных",
    ),
    "There is no ongoing election session."=>array(
        "sv"=>"Выборы не проводятся",
        "scanian"=>"Выборы не проводятся",
    ),
    "Create new election round"=>array(
        "sv"=>"Создать новое голосование",
        "scanian"=>"Создать новое голосование",
    ),
    "What to be elected:"=>array(
        "sv"=>"Что/кого выбираем:",
        "scanian"=>"Что/кого выбираем:",
    ),
    "Number of selectable options:"=>array(
        "sv"=>"Количесвто голосов:",
        "scanian"=>"Количесвто голосов:",
    ),
    "Alternatives:"=>array(
        "sv"=>"Варианты:",
        "scanian"=>"Варианты:",
    ),
    "Increase/decrease number of fields:"=>array(
        "sv"=>"Увеличить уменьшить количество полей:",
        "scanian"=>"Увеличить уменьшить количество полей:",
    ),
    "Start new election round"=>array(
        "sv"=>"Начать новые выборы",
        "scanian"=>"Начать новые выборы",
    ),
    "Previous election round"=>array(
        "sv"=>"Предыдущие выборы",
        "scanian"=>"Предыдущие выборы",
    ),
    "End election round"=>array(
        "sv"=>"Закончить выборы",
        "scanian"=>"Закончить выборы",
    ),
    // index/classes/TableGenerator.php
    "votes"=>array(
        "sv"=>"голосов",
        "scanian"=>"голосов"
    ),
    "opt."=>array(
        "sv"=>"варианта",
        "scanian"=>"варианта",
    ),
    "Number of failed voting attempts:"=>array(
        "sv"=>"Количество неудачных попыток голосования",
        "scanian"=>"Количество неудачных попыток голосования",
    ),
    "Relationship between total votes accepted and failed voting attempts (lower is better):"=>array(
        "sv"=>"Отношение между общим количеством принятых голосов и неудачными попытками голосования (меньше - лучше):",
        "scanian"=>"Отношение между общим количеством принятых голосов и неудачными попытками голосования (меньше - лучше):",
    ),
    "Nothing has been elected yet"=>array(
        "sv"=>"Пока ничего не избрано",
        "scanian"=>"Пока ничего не избрано",
    ),
    "No election opportunity in sight"=>array(
        "sv"=>"Никаких возможностей для выборов не предвидится",
        "scanian"=>"Никаких возможностей для выборов не предвидится",
    ),
    "Opened"=>array(
        "sv"=>"Открыто",
        "scanian"=>"Открыто",
    ),
    "Closed"=>array(
        "sv"=>"Закрыто",
        "scanian"=>"Закрыто",
    ),
    // index/classes/MenuGenerator.php
    "Administrate election"=>array(
        "sv"=>"Администрировать выборы",
        "scanian"=>"Администрировать выборы",
    ),
    "See previous rounds"=>array(
        "sv"=>"Посмотреть предыдущие кампании",
        "scanian"=>"Посмотреть предыдущие кампании",
    ),
    "See previous round"=>array(
        "sv"=>"Посмотреть предыдущую кампаниию",
        "scanian"=>"Посмотреть предыдущую кампаниию",
    ),
    "See all rounds"=>array(
        "sv"=>"Посмотреть все кампании",
        "scanian"=>"Посмотреть все кампании",
    ),
    "New user"=>array(
        "sv"=>"Новый пользователь",
        "scanian"=>"Новый пользователь",
    ),
    "Manage election session"=>array(
        "sv"=>"Редактировать выборную сессию",
        "scanian"=>"Редактировать выборную сессию",
    ),
    "Usage history"=>array(
        "sv"=>"История использования",
        "scanian"=>"История использования",
    ),
    // index/admin/electionControl.php
    "Create new election"=>array(
        "sv"=>"Создать новые выборы",
        "scanian"=>"Создать новые выборы",
    ),
    "Name of election:"=>array(
        "sv"=>"Название выборов:",
        "scanian"=>"Название выборов:",
    ),
    "Max number of people:"=>array(
        "sv"=>"Максимальное количество участников:",
        "scanian"=>"Максимальное количество участников:",
    ),
    "Receive codes in CSV-format (for distance voting)"=>array(
        "sv"=>"Получить коды в CSV-файле",
        "scanian"=>"Получить коды в CSV-файле",
    ),
    "Create"=>array(
        "sv"=>"Создать",
        "scanian"=>"Создать",
    ),
    "A new election has been created!"=>array(
        "sv"=>"Новые выборы были созданы!",
        "scanian"=>"Новые выборы были созданы!",
    ),
    "Close current election"=>array(
        "sv"=>"Закончить текущие выборы",
        "scanian"=>"Закончить текущие выборы",
    ),
    "Close election"=>array(
        "sv"=>"Закончить выборы",
        "scanian"=>"Закончить выборы"
    ),
    "Previous election rounds"=>array(
        "sv"=>"Предыдущие кампании",
        "scanian"=>"Предыдущие кампании",
    ),
    // actions/votingspagehandler.php
    "You have not selected anything to vote on"=>array(
        "sv"=>"Вы ничего не выбрали",
        "scanian"=>"Вы ничего не выбрали",
    ),
    "The election round you are trying to vote on has already ended. The page has been refreshed so you can try again"=>array(
        "sv"=>"Выборы, на которых вы пытаетесь проголосовать, уже завершились. Страница была обновлена, и вы можете попробовать еще раз.",
        "scanian"=>"Выборы, на которых вы пытаетесь проголосовать, уже завершились. Страница была обновлена, и вы можете попробовать еще раз.",
    ),
    "You are not allowed to pick too many candidates"=>array(
        "sv"=>"Вам не разрешается выбирать слишком много кандидатов",
        "scanian"=>"Вам не разрешается выбирать слишком много кандидатов",
    ),
    "You have not entered any personal code"=>array(
        "sv"=>"Вы не ввели персональный код",
        "scanian"=>"Вы не ввели персональный код",
    ),
    "You have not entered any temporary code"=>array(
        "sv"=>"Вы не ввели код выборов",
        "scanian"=>"Вы не ввели код выборов",
    ),
    "The election round has already been terminated"=>array(
        "sv"=>"Выборы завершены",
        "scanian"=>"Выборы завершены",
    ),
    "Your vote has been registered"=>array(
        "sv"=>"Спасибо! Ваш голос учтён",
        "scanian"=>"Спасибо! Ваш голос учтён",
    ),
    "Your vote was not registered. This can depend on you entering one of the codes wrong, or because you already have voted"=>array(
        "sv"=>"Ваш голос не был зарегистрирован. Это может быть связано с тем, что вы неправильно ввели один из кодов, или с тем, что вы уже проголосовали",
        "scanian"=>"Ваш голос не был зарегистрирован. Это может быть связано с тем, что вы неправильно ввели один из кодов, или с тем, что вы уже проголосовали."
    ),
    // actions/usersessionhandler.php
    "You have not entered any username"=>array(
        "sv"=>"Вы не ввели имя пользователя",
        "scanian"=>"Вы не ввели имя пользователя",
    ),
    "You have not entered any password"=>array(
        "sv"=>"Вы не ввели пароль",
        "scanian"=>"Вы не ввели пароль",
    ),
    "The username and/or the password is wrong"=>array(
        "sv"=>"Имя пользователя и/или пароль неверны",
        "scanian"=>"Имя пользователя и/или пароль неверны",
    ),
    "One or more of the fields were empty"=>array(
        "sv"=>"Одно или несколько полей были пустыми",
        "scanian"=>"Одно или несколько полей были пустыми",
    ),
    "The username you entered already exists"=>array(
        "sv"=>"Введённое вами имя пользователя уже существует",
        "scanian"=>"Введённое вами имя пользователя уже существует",
    ),
    "The password has been changed"=>array(
        "sv"=>"Пароль был изменён",
        "scanian"=>"Пароль был изменён"
    ),
    "A new user has been created"=>array(
        "sv"=>"Создан новый пользователь",
        "scanian"=>"Создан новый пользователь",
    ),
    "User deleted"=>array(
        "sv"=>"Пользователь удалён",
        "scanian"=>"Пользователь удалён",
    ),
    "You have not chosen any users to delete"=>array(
        "sv"=>"Вы не выбрали ни одного пользователя для удаления",
        "scanian"=>"Вы не выбрали ни одного пользователя для удаления",
    ),
    // actions/genlastresult.php
    "Please wait. Voting in progress."=>array(
        "sv"=>"Пожалуйста, подождите. Идет голосование.",
        "scanian"=>"Пожалуйста, подождите. Идет голосование.",
    ),
    // actions/electionadminpagehandler.php
    "You have not entered what to be elected"=>array(
        "sv"=>"Вы не указали, что должно быть избрано",
        "scanian"=>"Вы не указали, что должно быть избрано",
    ),
    "You have not entered how many one can vote on"=>array(
        "sv"=>"Вы не указали количество голосов у одного избирателя",
        "scanian"=>"Вы не указали количество голосов у одного избирателя",
    ),
    "An election is already in progress"=>array(
        "sv"=>"Выборы уже идут",
        "scanian"=>"Выборы уже идут",
    ),
    "You must enter at least two candidates"=>array(
        "sv"=>"Вы должны ввести не менее двух кандидатов",
        "scanian"=>"Вы должны ввести не менее двух кандидатов",
    ),
    "A new election round has begun"=>array(
        "sv"=>"Начались новые выборы",
        "scanian"=>"Начались новые выборы'",
    ),
    // actions/csvcodesend.php
    "Personal code"=>array(
        "sv"=>"Персональный код",
        "scanian"=>"Персональный код",
    ),
    "Boo! You are not allowed to do that."=>array(
        "sv"=>"Уууу! Вам не разрешается это делать.",
        "scanian"=>"Уууу! Вам не разрешается это делать.",
    ),
    // actions/codeprint.php
    "E-vote, E-sektionen's voting system"=>array(
        "sv"=>"E-vote, E-sektionens система для голосования",
        "scanian"=>"E-vote, E-sektionens система для голосования",
    ),
    "Your personal code is"=>array(
        "sv"=>"Ваш персональный код",
        "scanian"=>"Ваш персональный код",
    ),
    // actions/adminpagehandler.php
    "You have not entered a name for the election"=>array(
        "sv"=>"Вы не указали название выборов",
        "scanian"=>"Вы не указали название выборов",
    ),
    "You have not entered the max number of people"=>array(
        "sv"=>"Вы не указали максимальное количество избирателей",
        "scanian"=>"Вы не указали максимальное количество избирателей",
    ),
    "There is already an election in progress"=>array(
        "sv"=>"Выборы уже идут",
        "scanian"=>"Выборы уже идут",
    ),
    "The election is now closed"=>array(
        "sv"=>"Выборы завершены",
        "scanian"=>"Выборы завершены",
    ),
    "Wrong username and/or password somewhere"=>array(
        "sv"=>"Неправильное имя пользователя и/или пароль",
        "scanian"=>"Неправильное имя пользователя и/или пароль",
    ),
    // data/RandomInfo.php
    // Success array
    "*Happy trumpet fanfare*"=>array(
        "sv"=>"*Glad trumpetfanfar*",
        "scanian"=>"*Glaud trumpetfanfar*",
    ),
    "You're the best!"=>array(
        "sv"=>"Du är bäst!",
        "scanian"=>"Due é en päärla",
    ),
    "You know this!"=>array(
        "sv"=>"Du kan det här!",
        "scanan"=>"Du fattar det här!",
    ),
    "Splendid!"=>array(
        "sv"=>"Kanon!",
        "scanian"=>"Redigt bra!",
    ),
    "You are unreasonably good at this!"=>array(
        "sv"=>"Du är orimligt duktig på det här!",
        "scanian"=>"Due é sinnessjukt brau på detta!",
    ),
    "Cool!"=>array(
        "sv"=>"Coolt!",
        "scanian"=>"Ballt!",
    ),
    "Ja!"=>array( // this one is the other way around
        "sv"=>"Yes!",
        "scanian"=>"Oui!",
    ),
    "What a talent!"=>array(
        "sv"=>"Vilken talang!",
        "scanian"=>"Som en äkta MFF:are!", // #mestamästarna
    ),
    "You did it!"=>array(
        "sv"=>"Du lyckades!",
        "scanian"=>"Due gjoerde ente fejl!",
    ),
    "Very niice!"=>array(
        "sv"=>"Kalasbra!",
        "scanian"=>"Riiktigt brau!",
    ),
    "Immense happiness!"=>array(
        "sv"=>"Ofantlig lycka!",
        "scanian"=>"Jäevligt glatt!",
    ),
    "Really good!"=>array(
        "sv"=>"Toppenbra!",
        "scanian"=>"Dejlig!",
    ),
    "Yup!"=>array(
        "sv"=>"Jajamensan!",
        "scanian"=>"Jaddå!",
    ),
    "Look at them skillz!"=>array(
        "sv"=>"Look at dem skillz!",
        "scanian"=>"Kålla in skillzen!",
    ),
    "You got some MAD voting skills!"=>array(
        "sv"=>"You got some MAD voting skills!",
        "scanian"=>"You gått såm MAD voting skills!",
    ),
    "Your degree of being good is high!"=>array(
        "sv"=>"Din duktighetsgrad är hög!",
        "scanian"=>"Due é en Skåuning i själen!",
    ),
    "Fantastic!"=>array(
        "sv"=>"Fantastiskt!",
        "scanian"=>"Fantastiiskt!",
    ),
    "Truly great!"=>array(
        "sv"=>"Storartat!",
        "scanian"=>"Som en skåunsk såmmardaug!",
    ),
    "Phenomenal!"=>array(
        "sv"=>"Fenomenalt!",
        "scanian"=>"Fenåmenault!",
    ),
    "Outstanding!"=>array(
        "sv"=>"Enastående!",
        "scanian"=>"En po' miljonen!",
    ),
    "Formidable!"=>array(
        "sv"=>"Formidabelt!",
        "scanian"=>"Stabilare änn Hallandsåsen!",
    ),
    "Brilliant!"=>array(
        "sv"=>"Strålande!",
        "scanian"=>"Stråulande!",
    ),
    "Magnificent!"=>array(
        "sv"=>"Magnifikt!",
        "scanian"=>"Maxat!",
    ),
    "Excellent!"=>array(
        "sv"=>"Förträffligt!",
        "scanian"=>"Redit'!",
    ),
    "Noice!"=>array(
        "sv"=>"Smäckert!",
        "scanian"=>"Naaajs",
    ),
    "Real tough!"=>array(
        "sv"=>"Tufft!",
        "scanian"=>"Tuff!",
    ),
    // ...
    "You get an A in Usage of E-vote!"=>array(
        "sv"=>"Du får en 5:a i användning av E-vote",
        "scanian"=>"Due fåur en fimma i att anvenda E-vote",
    ),
    "You are so good!"=>array(
        "sv"=>"Du är underbart duktig!",
        "scanian"=>"Due röestar som en riktig skåuning!",
    ),
    "YEAH!"=>array(
        "sv"=>"GÖTTANS",
        "scanian"=>"GÖTT",
    ),
    // Error array
    "Something went wrong."=>array(
        "sv"=>"Något gick fel.",
        "scanian"=>"Nått funkade ente",
    ),
    "Ouch!"=>array(
        "sv"=>"Ajdå!",
        "scanian"=>"Ajdåeh!",
    ),
    "Oof!"=>array(
        "sv"=>"Attans!",
        "scanian"=>"Faen osså",
    ),
    "Whoops!"=>array(
        "sv"=>"Whoops!",
        "scanian"=>"Whoops!",
    ),
    "Nooo!"=>array(
        "sv"=>"Naj!",
        "scanian"=>"*stockholmska* Åh neeeej",
    ),
    "Oopsie!"=>array(
        "sv"=>"Hoppsan!",
        "scanian"=>"Ålarens!",
    ),
    "Gosh darn it"=>array(
        "sv"=>"Rackarns!",
        "scanian"=>"Föer i hilvede!",
    ),
    "Nails!"=>array(
        "sv"=>"Järnspikar!",
        "scanian"=>"De vau ju själva faen!",
    ),
    "Frick!"=>array(
        "sv"=>"Sablarns!",
        "scanian"=>"Fubbik!",
    ),
    "What the frick?!"=>array(
        "sv"=>"Attans järnspikar!",
        "scanian"=>"Stockholm osså!",
    ),
    "Whuuupps!"=>array(
        "sv"=>"Whuuupps!",
        "scanian"=>"Ente Guld o gröna skogar!",
    ),
)
);
?>