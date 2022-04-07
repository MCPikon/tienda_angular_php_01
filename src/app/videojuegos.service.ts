import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Videojuego } from './models/Videojuego';
import { VideojuegoCarrito } from './models/VideojuegoCarrito';
import { Pedido } from './models/Pedido';

@Injectable({
  providedIn: 'root'
})
export class VideojuegosService {
  ruta_server = "/server/";
  constructor(private http:HttpClient) { }

  obtenerVideojuegos():Observable<Videojuego[]> {
    return this.http.get<Videojuego[]>(this.ruta_server + 'obtenerVideojuegos.php');
  }

  obtenerVideojuegosPorId(id:number):Observable<Videojuego> {
    return this.http.get<Videojuego>(this.ruta_server + "obtenerVideojuegoPorId.php?id=" + id);
  }

  obtenerVideojuegosCarrito():Observable<VideojuegoCarrito[]> {
    return this.http.get<VideojuegoCarrito[]>(this.ruta_server + "obtenerVideojuegosCarrito.php");
  }

  agregarAlCarrito(idVideojuego:number, cantidad:number):Observable<any> {
    return this.http.post<any>(this.ruta_server + "agregarProductoCarrito.php",
      {"id":idVideojuego, "cantidad":cantidad});
  }

  vaciarCarrito():Observable<string> {
    return this.http.get<string>(this.ruta_server + "vaciarCarrito.php");
  }

  registrarPedido(p:Pedido):Observable<string> {
    return this.http.post<string>(this.ruta_server + "registrarPedido.php", p);
  }

}
