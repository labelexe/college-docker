//data objects
var attributes = [];

// initalized Data method
const InitalizedData = async function () {
    //start set attribute for select -> options
    await setAttributeElement();
}

/**
 * Получение атрибутов api
 */
const getAttributes = function () {
    //
    //let url = "http://jsonplaceholder.typicode.com/users";
    let url = "/wp-admin/admin-ajax.php?action=all_attribute";
    let options = {method: 'GET'};
    //
    fetch(url, options)
        .then(response => response.json())
        .then(data => {
            if (data.length !== null) {
                console.log('Api Data', data);
                attributes.push(data.data);
            }
        })
        .catch(function (error) {
            log('Request failed', error)
        })
        .finally(() => {
            // После завершения операции загрузки инициализируем данные
            InitalizedData();
        });
};

/**
 * Добавление атрибутов в DOM
 */
const setAttributeElement = function () {


    console.log('Add', attributes[0].data);


    if (attributes[0]) {
        //
                    //let attributes_array = attributes[0];
                let attributes_array = attributes[0].data;
        //
        if (attributes_array.length !== null) {

            let attributesItems = [];


            console.log('ARRAY ATTRibute', attributes_array);

            // window.testing = attributes_array;

            //filter data api for attributes data
            for (let att_i = 0; att_i < attributes_array.length; att_i++) { // выведет 0, затем 1, затем 2
                //
                //
                attributesItems.push({
                    title: attributes_array[att_i].title,
                    slug: attributes_array[att_i].slug
                });
            }

            console.log('attribute', attributesItems);

            //
            console.log('set Attribute');

            //Query Selector

            let attribute_select = document.querySelector("#select-attribute-name");
            let attribute_select_option = attribute_select.querySelector("option");
            // console.log('Query Options', attribute_select.querySelectorAll("option"));
            //

            // format options to array
            if (attributesItems.length !== null) {
                for (let att_element_i = 0; att_element_i < attributesItems.length; att_element_i++) {
                    //
                    currentAttributeOptions = new Option(text = '(' + attributesItems[att_element_i].slug + ') ' + attributesItems[att_element_i].title, value = attributesItems[att_element_i].slug);
                    attribute_select.appendChild(currentAttributeOptions);
                }
                // if (AttributeOptions.length !== null) {
                //
                // }
            } else {
                //Если атрибуты через api не получены или отсутствуют, создаем
                attribute_select.innerHTML = "";
                //
                currentAttributeOptions = new Option('Атрибуты отсутствуют.', null, true, null);
                attribute_select.appendChild(currentAttributeOptions);
                //
                currentAttributeOptions = new Option(text = 'Добавьте в разделе "Микро-разметка"', null, null, null);
                attribute_select.appendChild(currentAttributeOptions);
            }
        }
    }
};


// initalized new App method
const __Created = async function () {
    //Log
    console.log('... Created');
    //methods
    await getAttributes();
}



