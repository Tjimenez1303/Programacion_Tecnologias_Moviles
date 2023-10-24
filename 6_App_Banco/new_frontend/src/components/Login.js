import { StyleSheet, Text, View, TextInput, Button, Alert } from 'react-native'
import React, {useState} from 'react'
import AsyncStorage from '@react-native-async-storage/async-storage'

// Importamos el useNavigation para poder redireccionar al usuario
import { useNavigation } from '@react-navigation/native'

// Importamos axios para poder realizar las peticiones al backend
import axios from 'axios'

export default function Login() {
    // Aquí vamos a crear los estados para el email y el password
    const [email, setEmail] = useState('')
    const [password, setPassword] = useState('')

    // Aquí vamos a crear la función para el botón de login
    const navigation = useNavigation()

    // Funcion flecha para el manejador del Login
    const handleLogin = () => {
        // Realizamos la petición al backend
        axios.post('http://172.20.10.3:8000/api/login', { // IP por la que está corriendo mi backend
            // Enviamos los datos del email y el password
            email: email,
            password: password
        })
        .then((response) => { // Si la respuesta es correcta
            // Se muestra un mensaje
            Alert.alert('Bienvenido, inicio de sesión correcto')

            // Creamos una variable para almacenar el token || response.data.token -> Es la respuesta del backend
            const token = response.data.token

            // Vamos a guardar el token en el Storage del dispositivo móvil || Se usa Async para que sea un proceso asíncrono
            AsyncStorage.setItem('token', token)

            // Redireccionar al usuario al componente Home
            navigation.navigate('Home')

            // Por si quiero devolverme limpio los campos
            setEmail('')
            setPassword('')
        })
        .catch((error) => { // Si la respuesta es incorrecta
            // Error 401 -> Error de autenticación
            if (error.response && error.response.status === 401) {  

                // Si la respuesta es incorrecta, vamos a mostrar un mensaje
                Alert.alert('Contraseña incorrecta. Intente nuevamente')

                // Returnamos a la vista de home
                navigation.navigate('Home')
            }
            else{
                // Si la respuesta es incorrecta, vamos a mostrar un mensaje
                Alert.alert('Usuario no encontrado. Intente nuevamente')

                // Returnamos a la vista de home
                navigation.navigate('Home')
            }
        })
    }
  return (
    <View style = {styles.container}>

        <Text style={{fontSize: 30, marginBottom: 40}}>Iniciar sesión</Text>

        <TextInput
                style={styles.inputs}
                placeholder="Correo electrónico"
                onChangeText={(text) => setEmail(text)}
                value={email} 
        />

        <TextInput
                style={styles.inputs}
                placeholder="Contraseña"
                onChangeText={(text) => setPassword(text)}
                secureTextEntry={true}
                value={password} 
        />

        <Button title="Iniciar sesión" onPress={handleLogin} color="#000000" />
      
    </View>
  )
}

const styles = StyleSheet.create({
    container: {
        flex: 1,
        justifyContent: 'center',
        alignItems: 'center',
        backgroundColor: '#D3B87D'
    },
    inputs: {
        backgroundColor: '#fff',
        textAlign: 'center',
        borderWidth: 1,
        borderColor: '#000',
        width: 200,
        height: 40,
        padding: 10,
        margin: 10,
        borderRadius: 10,
    }
})