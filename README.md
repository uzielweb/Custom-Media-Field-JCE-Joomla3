### CustomMedia - Campo personalizado para seleção de mídia (Joomla)

**Descrição (Português):**

O CustomMedia é um campo personalizado para seleção de mídia, desenvolvido para utilização no Joomla. Ele permite aos usuários escolherem mídias, como imagens ou vídeos, de forma fácil e intuitiva dentro do ambiente do Joomla. O campo é especialmente útil quando se deseja adicionar funcionalidades de seleção de mídia em formulários personalizados.

Características principais:

- Compatível com o Joomla.
- Suporta o popular editor JCE, caso esteja instalado.
- Oferece uma experiência de seleção de mídia simplificada.
- Permite selecionar e exibir mídias de diferentes tipos, como imagens e vídeos.
- Fácil integração com formulários personalizados.

**Instruções de uso:**

1. Extraia o arquivo **custommedia.php** na pasta **fields** de tua extensão desejada

**Description (English):**

### CustomMedia - Custom Field for Media Selection (Joomla)

**Description:**

CustomMedia is a custom field for media selection, developed for use in Joomla. It allows users to choose media, such as images or videos, easily and intuitively within the Joomla environment. The field is especially useful when you want to add media selection functionality to custom forms.

Key Features:

- Compatible with Joomla.
- Supports the popular JCE editor, if installed.
- Provides a simplified media selection experience.
- Allows selection and display of different types of media, such as images and videos.
- Easy integration with custom forms.

**Usage Instructions:**

1. Unzip the *custommedia.php** file into **fields** folder in your desired extension

**Note:** The CustomMedia field requires the installation of the JCE editor for full functionality. If JCE is not installed, the field will fallback to the default Joomla media field.

*Exemplo de uso do campo CustomMedia em um formulário Joomla:*

**Exemplo de utilização (Português):**
Aqui está um exemplo de como utilizar o campo CustomMedia em um formulário Joomla:
Este exemplo demonstra a utilização do campo CustomMedia em um formulário Joomla. O campo permite selecionar uma mídia, como uma imagem ou vídeo, dentro do ambiente do Joomla. Ele é configurado como obrigatório (required) e possui uma etiqueta (label) e uma descrição (description) para orientar o usuário na seleção da mídia desejada.

**Usage example (English):**

Here is an example of how to use the Custommedia field in a Joomla form:
This example demonstrates the usage of the CustomMedia field in a Joomla form. The field allows selecting a media, such as an image or video, within the Joomla environment. It is configured as required and has a label and description to guide the user in selecting the desired media.


**Formulário XML: / XML FORM:**


```xml
<?xml version="1.0" encoding="UTF-8"?>
<form>
    <fields name="params">
        <fieldset name="custommedia_settings" label="CustomMedia Settings" description="Configure the options for the CustomMedia field.">
            <field
                name="changeit_mudeisso"
                type="custommedia"
                label="Select a media"
                description="Select an image or video."
                filter="raw"
                required="true"
            />
        </fieldset>
    </fields>
</form>
```
