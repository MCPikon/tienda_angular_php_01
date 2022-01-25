import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Videojuego } from './models/Videojuego';
import { VideojuegoCarrito } from './models/VideojuegoCarrito';

@Injectable({
  providedIn: 'root'
})
export class VideojuegosService {
  ruta_server = "/server/"
  constructor(private http:HttpClient) { }

  obtenerDatos():Observable<Videojuego[]> {
    return this.http.get<Videojuego[]>(this.ruta_server + 'obtenerVideojuegos.php');
  }

  obtenerVideojuegosCarrito():Observable<VideojuegoCarrito[]> {
    return this.http.get<VideojuegoCarrito[]>(this.ruta_server + "obtenerVideojuegosCarrito.php");
  }

  agregarAlCarrito(idVideojuego:number, cantidad:number):Observable<any> {
    return this.http.post<any>(this.ruta_server + "agregarProductoCarrito.php",
      {"id":idVideojuego, "cantidad":cantidad});
  }

}
