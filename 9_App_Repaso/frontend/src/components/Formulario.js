import { Button, StyleSheet, Text, View} from 'react-native'
import React, { useState } from 'react'

// Importamos axios
import axios from 'axios';
import { TextInput } from 'react-native-web';

export default function Formulario() {
    // Creamos los estados para cada uno de los campos del formulario
    const [name, setName] = useState('');
    const [last_name, setLast_name] = useState('');
    const [age, setAge] = useState('');
    const [companions, setCompanions] = useState('');

    // Creamos la funcion para enviar los datos
    const handleLogin = () => {
        // Creamos un objeto con los datos del formulario
        const data = {
            name: name,
            last_name: last_name,
            age: age,
            companions: companions
        }

        // Enviamos los datos a la API
        axios.post('http://192.168.1.8:8000/api/guests', data)
        .then((response) => {
            // Si la respuesta es correcta mostramos un mensaje
            alert('Datos enviados correctamente')
        })
        .catch(function (error) {
            // Si hay un error mostramos un mensaje
            alert('Error al enviar los datos')
            console.log(error.response.data.message)
        })
    }


  return (
    <View styles={styles.container}>
        {/* Creamos un titulo */}
        <Text style={{ fontSize: 30, marginBottom: 40 }}>Formulario de ingreso</Text>

        {/* Creamos campo para el nombre */}
        <TextInput placeholder='Ingrese su nombre' onChangeText={(text) =>setName(text)} style={styles.input}></TextInput>
        {/* Creamos campo para el apellido */}
        <TextInput placeholder='Ingrese su apellido' onChangeText={(text) =>setLast_name(text)} style={styles.input}></TextInput>
        {/* Creamos campo para el edad */}
        <TextInput placeholder='Ingrese su edad' onChangeText={(text) =>setAge(text)} style={styles.input}></TextInput>
        {/* Creamos campo para el acompañantes */}
        <TextInput placeholder='Ingrese sus acompañantes' onChangeText={(text) =>setCompanions(text)} style={styles.input}></TextInput>

        {/* Creamos un boton para enviar los datos */}
        <Button title='Registrarse' onPress={handleLogin}></Button>
    </View>
  )
}

const styles = StyleSheet.create({
    // Estilos para el contenedor
    container: {
        flex: 1,
        backgroundColor: '#fff',
        alignItems: 'center',
        justifyContent: 'center',
    },

    // Estilos para el campo de texto
    input: {
        height: 40,
        width: 200,
        margin: 12,
        borderWidth: 1,
        padding: 10,
    },
})