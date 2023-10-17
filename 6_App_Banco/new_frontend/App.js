import { NavigationContainer } from '@react-navigation/native';
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
        <StackActions.Screen name="Home" component={Home} />
        {/* Creamos el stack de Login */}
        <StackActions.Screen name="Login" component={Login} />
        {/* Creamos el stack de Logout */}
        <StackActions.Screen name="Logout" component={Logout} />
        {/* Creamos el stack de Perfil */}
        <StackActions.Screen name="Perfil" component={Perfil} />

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
