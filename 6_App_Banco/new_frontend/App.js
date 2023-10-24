import { StatusBar } from 'expo-status-bar';
import { StyleSheet, Text, View } from 'react-native';

// Importamos el NavigationContainer
import { NavigationContainer } from '@react-navigation/native';
// Importamos el StackActions
import { createStackNavigator } from '@react-navigation/stack';

// Importamos el componente Login
import Login from './src/components/Login';
// Importamos el componente Logout
import Logout from './src/components/Logout';
// Importamos el componente Perfil
import Perfil from './src/components/Perfil';
// Importamos el componente Home
import Home from './src/components/Home';

const Stack = createStackNavigator();

export default function App() {
  return (
    // Creamos el contenedor de navegación 
    <NavigationContainer>
      {/* Cuando el aplicativo cargue se va a mostrar el componente Login inicialmente */}
      <Stack.Navigator initialRouteName="Login">

        {/* Creamos el stack de home */}
        <Stack.Screen name="Home" component={Home} options={{ headerShown: false }} />
        {/* Creamos el stack de Login */}
        <Stack.Screen name="Login" component={Login} options={{ headerShown: false }} />
        {/* Creamos el stack de Logout */}
        <Stack.Screen name="Logout" component={Logout} options={{ headerShown: false }} />
        {/* Creamos el stack de Perfil */}
        <Stack.Screen name="Perfil" component={Perfil} options={{ headerShown: false }} />

      </Stack.Navigator>
    </NavigationContainer>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: '#fff',
    alignItems: 'center',
    justifyContent: 'center',
  },
});
