/**
* @author Aleksey Savenkov
* @description 'Плагин для добавления аттрибутов itemprop в стандартный визуальный редактор tinymce wordpress. 
Список атрибутов можно добавлять вручную в разделе админ панели [Спец-разметка].'
* @return void
*/

(function () {
    /**
     * Регистрация нового плагина для tinymce wordpress
     * @return void
     */
    tinymce.PluginManager.add("itemprop_btn", function (editor, url) {
        // Добавление кнопки на панель
        editor.addButton("itemprop_btn", {
            title: "Добавить itemprop",
            //cmd: "itemprop_btn",
            cmd: "popup_select_itemprop_mce",
            // image: url + '/scanwp.png',
            //image: url + '/scanwp.png',
            icon: "info",
        });

        //Добавление команды
        editor.addCommand("itemprop_btn", function () {
            var selected_text = editor.selection.getContent({
                format: "html",
            });

            console.table(editor.selection);
            console.log(editor.selection);
            console.log(editor.selection.getSelectedBlocks());
            console.log(editor.selection.getSelectedBlocks().length);

            //выбранный itemprop
            select_itemprop = "";

            if (editor.selection.getSelectedBlocks().length <= 1) {
                if (!editor.selection.getSelectedBlocks()[0].getAttribute("itemprop")) {
                    //установка itemprop
                    // editor.selection
                    // .getSelectedBlocks()[0]
                    // .setAttribute("itemprop", "item");
                    console.log(tinyMCE.activeEditor.selection.getNode());
                    //getAttribute
                    console.log(
                        tinymce.activeEditor.dom.getAttribs(
                            tinyMCE.activeEditor.selection.getNode()
                        )
                    );
                    //setAttribute
                    tinymce.activeEditor.dom.setAttribs(
                        tinyMCE.activeEditor.selection.getNode(), {
                            itemprop: "item"
                        }
                    );
                    editor.save();
                } else {
                    alert("Блоку уже задан itemprop");
                }

                console.log("Установлен новый itemprop");
            } else if (editor.selection.getSelectedBlocks().length) {
                return alert("Родительский блок не отсутствует");
            }

            //select text
            //console.log(selected_text);
            editor.execCommand("mceReplaceContent", false, selected_text);
            return;
        });

        //popup

        //add popup
        editor.addCommand("popup_select_itemprop_mce", function (ui, v) {
            //проверка на выбранный элемент
            if (editor.selection.getSelectedBlocks().length <= 1) {
                console.log(editor.selection.getSelectedBlocks(), editor.selection.getSelectedBlocks().length);
                //если есть атрибут
                if (editor.selection.getContent({
                        format: "html"
                    })) {
                    // Регистрация комманд
                    var w = document.body.clientWidth / 4,
                        h = document.body.clientHeight / 3;
                    if (w > 1000) w = 1000;
                    if (h > 800) h = 800;
                    editor.windowManager.open({
                        title: "Менеджер атрибутов микро-разметки",
                        //file: ajaxurl + '?action=velocity_lightbox&img=meow',
                        file: ajaxurl + "?action=itemprop_list_lightbox",
                        width: w, // size of our window
                        height: h, // size of our window
                        inline: 1,
                    });
                    console.log(editor);
                }else{
                    alert('Выбранный вами элемент не являеться частью контента html элементов.\nВозможно вы находитесь за гранью редактора контента.\nПример произведите выделение пкм* текста или блока.');
                }
            }else{
                alert('Выбранно более 1 элемента');
            }
        });
    });

    // Popup

    /** Добавление подчеркивания тегов itemprop в админ панели */
})();