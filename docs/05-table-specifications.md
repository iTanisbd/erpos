# ERPOS Documentation

Document: Table Specifications
Version: 1.0
Status: Draft
Last Updated: 2026-08-06
Author: Md. Anisur Rahman

---

# Customers Table

Table Name: customers

Purpose:

Stores customer information for repair tickets and future business records.

---

| Column | Type | Nullable | Default | Description |
|---------|------|----------|----------|-------------|
| id | bigint | No | Auto Increment | Primary Key |
| customer_id | string | No | - | Business Customer ID (CUS-000001) |
| name | string | No | - | Customer Name |
| phone | string(20) | No | - | Mobile Number |
| email | string | Yes | NULL | Email Address |
| address | text | Yes | NULL | Customer Address |
| notes | text | Yes | NULL | Internal Notes |
| status | boolean | No | true | Active / Inactive |
| created_at | timestamp | No | Current | Record Created Time |
| updated_at | timestamp | No | Current | Record Updated Time |
| deleted_at | timestamp | Yes | NULL | Soft Delete |
