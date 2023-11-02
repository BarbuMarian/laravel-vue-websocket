import api from "./api";

const resource = "/tasks";

export const allTasks = () => api.get(resource);

export const createTask = task => api.post(resource,task);

export const updateTask = (id,task) => api.post(`${resource}/update/${id}`, task);

export const removeTask = id => api.post(`${resource}/${id}/delete`);

export const completeTask = (id,task) => api.post(`${resource}/${id}/complete`, task);
