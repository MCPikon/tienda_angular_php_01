import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Videojuego } from './models/Videojuego';

@Injectable({
  providedIn: 'root'
})
export class VideojuegosService {
  ruta_server = "/server/"
  constructor(private http:HttpClient) { }

  obtenerDatos():Observable<Videojuego[]> {
    return this.http.get<Videojuego[]>(this.ruta_server + 'obtenerVideojuegos.php');
  }
}
