<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <title>Менеджер атрибутов микро-разметки</title>
    <link rel='stylesheet'
          href='<?php echo admin_url(); ?>/load-styles.php?c=1&amp;dir=ltr&amp;load=dashicons,admin-bar,buttons,media-views,wp-admin,wp-auth-check&amp;ver=4.4.2'
          type='text/css'/>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="<?php echo TINY_ITEMPROP_DIR_URL; ?>/assets/css/admin.css"/>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.js"></script>
    <script type="text/javascript" src="<?php echo includes_url('/js/tinymce/tiny_mce_popup.js'); ?>"></script>
    <script type="text/javascript" src="<?php echo TINY_ITEMPROP_DIR_URL . "/assets/js/data.js" ?>"></script>
    <script>
        //Selection [Get Selected Blocks]
        // if (editor.selection.getSelectedBlocks() ===!null) {
        //     console.log(editor.selection.getSelectedBlocks());
        // }
    </script>
    <script type="text/javascript">
        // Modal
        let velocityModal = {
            local_ed: 'ed',
            /**
             * Инициализация
             */
            init: function (ed) {
                //Get Attributes
                __Created();

                velocityModal.local_ed = ed;
                tinyMCEPopup.resizeToInnerSize();
            },
            /**
             * Добавление атрибута к элементу
             */
            insert: function insertButton(ed) {

                //tinyMCEPopup.execCommand('mceRemoveNode', false, null); // Try and remove existing style / blockquote
                let selectAttributeName = $('#select-attribute-name')[0].value;
                //tinyMCEPopup.execCommand('mceInsertContent', false, output);
                // tinyMCEPopup.close();// Return
                let ed_selection = ed.selection.getSelectedBlocks()[0].getAttribute("itemprop");

                let btnRemoveAttribute = $('#btn-remove-attribute')[0];

                if (ed_selection != null) {
                    if (btnRemoveAttribute.className === '_show') {
                        btnRemoveAttribute.classList.add('_show');
                    }
                } else {
                    btnRemoveAttribute.classList.remove('_show');
                }

                if (ed_selection != null && ed_selection == selectAttributeName) {
                    alert('Ошибочка, данный атрибут уже используется!')
                    //Если тег уже установлен
                } else if (ed.selection.getSelectedBlocks()[0] != null) {
                    console.log(tinyMCEPopup.editor.selection.getNode());
                    //Добавление атрибута в выбранный элемент текста
                    tinyMCEPopup.editor.dom.setAttribs(tinyMCEPopup.editor.selection.getNode(), {
                        itemprop: selectAttributeName
                    });
                    console.log(selectAttributeName);
                    console.log(ed_selection);
                    if (btnRemoveAttribute.className === '_show') {
                        btnRemoveAttribute.classList.remove('_show');
                    }
                    alert('Атрибут ' + selectAttributeName + ' установлен!');
                    //сохранение и закрытие модального окна;
                    ed.save();
                    tinyMCEPopup.close(); // Return
                } else {
                    if (btnRemoveAttribute.className === '_show') {
                        btnRemoveAttribute.classList.remove('_show');
                    }
                    alert('Ошибка данных');
                }
            },
            /**
             * Удаление атрибута с элемента
             */
            remove: function removeButton(ed) {
                let btnRemoveAttribute = $('#btn-remove-attribute')[0];
                ed_selection = ed.selection.getSelectedBlocks()[0].getAttribute("itemprop");
                //Удаление атрибута
                if (ed_selection) {
                    console.log(ed.selection.getSelectedBlocks()[0].removeAttribute("itemprop"));
                }
                //удаление кнопки
                if (btnRemoveAttribute.className === '_show') {
                    btnRemoveAttribute.classList.remove('_show');
                }
                ed.save();
                tinyMCEPopup.close(); // Return
            }
        };
        tinyMCEPopup.onInit.add(velocityModal.init, velocityModal);
    </script>
</head>

<body id="velocity-builder-body">
<div id="velocity-editor-container">
    <div class="itemprop-plugin-wrap">
        <label for="" style="font-size: 14px; font-weight: 500">Список атрибутов</label>
        <div class="wp-core-ui">
            <div class="select-wrap">
                <select name="select_attribute_name" id="select-attribute-name">
                    <option disabled selected value="">Выберите атрибут</option>
                </select>
            </div>
            <button onclick="javascript:velocityModal.insert(velocityModal.local_ed)" class="button-primary"
                    id="insert-velocity">
                <i class="fa fa-chevron-circle-right"></i> Применить
            </button>

            <button onclick="javascript:velocityModal.remove(velocityModal.local_ed)" class="button_delete"
                    id="btn-remove-attribute">
                <i class="fa fa-chevron-circle-right"></i> Удалить текущий атрибут <span id="current_attribute">
            </button>
        </div>
    </div>
</div>
<?php wp_footer(); ?>
</body>

<style>
    button.button_delete {
        display: none;
        padding: 8px 10px;
        margin: 0;
        text-transform: none;
        -webkit-appearance: none;
        font-size: 12px;
        line-height: 1;
        border: none;
        box-shadow: none;
        border-radius: 3px;
        display: inline-block;
        background-color: #f12929;
        color: #fff;
        cursor: pointer;
        font-weight: 600;
    }

    button.button_delete._show {
        display: block;
    }


    button.button_delete i {
        opacity: 0.7;
        font-size: 12px;
        margin: 0 2px 0 0;
        position: relative;
        left: -4px;
        top: 1px;
    }

    button.button_delete:hover {
        background-color: #f12960;
    }

    button.button_delete:focus,
    button.button_delete:active {
        background-color: #f12960;
        box-shadow: inset 0 -1px 1px rgba(0, 0, 0, 0.1);
    }
</style>

</html>
